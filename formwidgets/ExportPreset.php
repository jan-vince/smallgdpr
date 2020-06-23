<?php

namespace JanVince\SmallGDPR\FormWidgets;

use JanVince\SmallGDPR\Models\CookiesSettings;
use Backend\Classes\FormWidgetBase;
use Config;
use Flash;
use Log;
use File;
use Yaml;

class ExportPreset extends FormWidgetBase {

    public $label = '';
    public $description = '';

    /**
    * @var string A unique alias to identify this widget.
    */
    protected $defaultAlias = 'exportpreset';

    public function render() {

        return $this->makePartial('exportpreset');

    }

    public function onExportPreset()
    {

        $path = base_path(post('file_name'));

        $data = CookiesSettings::instance()->toArray();

        if (empty($data['value'])) {

            Log::error('SG: Settings data was not found!');
            Flash::error(trans('janvince.smallgdpr::lang.formwidgets.exportpreset.flash.export_error'));
            return false;
        }

        try {
            
            $dataParsed = Yaml::render($data['value']);
            
        } catch (\Exception $e) {
            
            Log::error('SG: Error parsing settings data! ' . $e->getMessage());
            Flash::error(trans('janvince.smallgdpr::lang.formwidgets.exportpreset.flash.parse_error'));
            return false;
        }
        

        
        try {

            File::put($path, $dataParsed);

        } catch (\Exception $e) {

            Log::error('SG: Error saving exported data! ' . $e->getMessage());
            Flash::error(trans('janvince.smallgdpr::lang.formwidgets.exportpreset.flash.export_error'));
            return false;
        }

        Log::info('SG: Data successfully exported!');
        Flash::success(trans('janvince.smallgdpr::lang.formwidgets.exportpreset.flash.export_successfull'));

    }
}