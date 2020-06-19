<?php

namespace JanVince\SmallGDPR\FormWidgets;

use JanVince\SmallGDPR\Models\CookiesSettings;
use Backend\Classes\FormWidgetBase;
use October\Rain\Parse\Yaml;
use Config;
use Flash;
use Log;

class ImportPreset extends FormWidgetBase {

    public $label = '';
    public $description = '';

    /**
    * @var string A unique alias to identify this widget.
    */
    protected $defaultAlias = 'importpreset';

    public function render() {

        return $this->makePartial('importpreset');

    }


    public function onImportPreset()
    {

        $file = base_path(post('file_name'));

        if (!file_exists($file)) {

            Log::error('SG: Preset file was not found!');
            Flash::error('janvince.smallgdpr::lang.formwidgets.importpreset.flash.file_error');
            return false;
        }

        $content = null;

        try {

            $content = (new Yaml())->parseFile($file);

        } catch (\Error $e) {

            Log::error('SG: Error parsing config file! ' . $e->getMessage());
            Flash::error('janvince.smallgdpr::lang.formwidgets.importpreset.flash.parse_error');
            return false;
        }

        try {

            CookiesSettings::set($content);

        } catch (\Error $e) {

            Log::error('SG: Error importing data! ' . $e->getMessage());
            Flash::error('janvince.smallgdpr::lang.formwidgets.importpreset.flash.import_error');
            return false;
        }

        Flash::success('janvince.smallgdpr::lang.formwidgets.importpreset.flash.import_successfull');

    }
}