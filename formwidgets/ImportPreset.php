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

        /**
         * Get post data
         */

        $file = null;

        if(post('media_file_name')) {

            $file = storage_path('app/media' . post('media_file_name'));

        } elseif(post('path_file_name')) {

            $file = base_path(post('path_file_name'));

        } else {

            $file = base_path(e(trans('janvince.smallgdpr::lang.formwidgets.importpreset.file_name_default')));

        }

        /**
         * No file provided
         */
        if(empty($file)) {

            Log::error('SG: Preset file was not found!');
            Flash::error(trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.file_missing_error'));

            throw new AjaxException([
                'X_OCTOBER_ERROR_MESSAGE' => trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.file_missing_error'),
            ]);

        }

        /**
         * File not exist!
         */
        if (!file_exists($file)) {

            Log::error('SG: Preset file was not found!');

            throw new AjaxException([
                'X_OCTOBER_ERROR_MESSAGE' => trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.file_error'),
            ]);
        }

        
        /**
         * Try to parse import file
         */
        
         $content = null;

        try {

            $content = (new Yaml())->parseFile($file);

        } catch (\Exception $e) {

            Log::error('SG: Error parsing config file! ' . $e->getMessage());

            throw new AjaxException([
                'X_OCTOBER_ERROR_MESSAGE' => trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.parse_error'),
            ]);
        }

        /**
         * Try to fill Settings model
         */
        try {

            CookiesSettings::set($content);

        } catch (\Exception $e) {

            Log::error('SG: Error importing data! ' . $e->getMessage());

            throw new AjaxException([
                'X_OCTOBER_ERROR_MESSAGE' => trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.import_error'),
            ]);
        }

        Log::info('SG: Data successfully imported!');
        Flash::success(trans('janvince.smallgdpr::lang.formwidgets.importpreset.flash.import_successfull'));

    }
}