<?php

namespace JanVince\SmallGDPR\Models;

use Model;
use App;
use Log;
use Flash;
use System\Classes\PluginManager;

class CookiesSettings extends Model {

    public $implement = [
        'System.Behaviors.SettingsModel',
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $translatable = [
        'cookies',
        'cookies_bar_title',
        'cookies_bar_content',
        'cookies_bar_buttons',
        'cookies_manage_title',
        'cookies_manage_content',
        'set_cookies_lifetime_days',
    ];

    protected $jsonable = [
        'cookies'
    ];

    public $requiredPermissions = ['janvince.smallgdpr.access_cookies_settings'];

    public $settingsCode = 'janvince_smallgdpr_cookies_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'set_cookies_lifetime_days' => 'numeric',
    ];

}
