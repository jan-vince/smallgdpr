<?php

namespace JanVince\SmallGDPR;

use System\Classes\PluginBase;
use System\Classes\PluginManager;
use JanVince\SmallGDPR\Models\CookiesSettings;
use Config;
use Backend;
use Validator;
use Log;
use Yaml;
use File;
use Storage;


class Plugin extends PluginBase {

    public function boot() {
        // dump( CookiesSettings::get('cookies') );
    }

    public function registerSettings() {

        return [
            'cookies' => [
                'label' => 'janvince.smallgdpr::lang.settings.cookies.name',
                'description' => 'janvince.smallgdpr::lang.settings.cookies.description',
                'category'    => 'GDPR',
                'icon' => 'icon-desktop',
                'class' => 'JanVince\SmallGDPR\Models\CookiesSettings',
                'keywords' => 'gdpr cookies bar consent',
                'order' => 990,
                'permissions' => ['janvince.smallgdpr.access_cookies_settings'],
            ],
        ];
    }

    public function registerComponents() {
        
        return [
            'JanVince\SmallGDPR\Components\CookiesBar' => 'cookiesBar',
            'JanVince\SmallGDPR\Components\CookiesManage' => 'cookiesManage',
        ];
    }

    public function registerMarkupTags() {

        $settings = CookiesSettings::instance();
        $pluginManager = \System\Classes\PluginManager::instance()->findByIdentifier('Rainlab.Translate');

        if ($pluginManager && !$pluginManager->disabled) {
            $settings->translateContext(\RainLab\Translate\Classes\Translator::instance()->getLocale());
        }

        return [
            'filters' => [],
            'functions' => [
                'cookiesSettingsGet' => function ($value, $default = NULL) use ($settings){

                    if(empty($settings->$value)) {
                        return $default;
                    } else {
                        return $settings->$value;
                    }
                }
            ]
        ];
    }

    public function registerFormWidgets() {
        
        return [
            'JanVince\SmallGDPR\FormWidgets\ImportPreset' => 'importpreset',
            'JanVince\SmallGDPR\FormWidgets\ExportPreset' => 'exportpreset',
        ];
    }

    public function registerPageSnippets() {
        
        return [
            '\JanVince\SmallGDPR\Components\CookiesManage' => 'cookiesManage'
        ];
    }
}
