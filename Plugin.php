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
        return [
            'filters' => [],
            'functions' => [
                'cookiesSettingsGet' => function ($value, $default = NULL) {
                    
                    if(empty(CookiesSettings::get($value))) {
                        return $default;
                    } else {
                        return CookiesSettings::get($value);
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
