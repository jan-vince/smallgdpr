<?php

namespace JanVince\SmallGDPR\FormWidgets;

use JanVince\SmallGDPR\Models\CookiesSettings;
use Backend\Classes\FormWidgetBase;
use October\Rain\Parse\Yaml;
use Config;
use Flash;
use Log;
use AjaxException;

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

        if(post('file_name')) {

            $file = storage_path('app/media' . post('file_name'));

        } else {

            $file = base_path(trans('janvince.smallgdpr::lang.formwidgets.importpreset.file_name_default'));
        }
        

        if (!file_exists($file)) {

            Log::error('SG: Preset file was not found!');
            Flash::error(trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.file_error'));
            
            throw new AjaxException([
                'X_OCTOBER_ERROR_MESSAGE' => trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.file_error'),
            ]);
        }

        $content = null;

        try {

            $content = (new Yaml())->parseFile($file);

        } catch (\Exception $e) {

            Log::error('SG: Error parsing config file! ' . $e->getMessage());
            Flash::error(trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.parse_error'));

            throw new AjaxException([
                'X_OCTOBER_ERROR_MESSAGE' => trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.parse_error'),
            ]);
        }

        try {

            CookiesSettings::set($content);

        } catch (\Exception $e) {

            Log::error('SG: Error importing data! ' . $e->getMessage());
            Flash::error(trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.import_error'));

            throw new AjaxException([
                'X_OCTOBER_ERROR_MESSAGE' => trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.import_error'),
            ]);
        }

        Flash::success(trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.import_successfull'));

    }
}