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
        'cookies_manage_title',
        'cookies_manage_content',
        'btn_accept_label',
        'btn_reject_label',
        'btn_settings_label',
        'btn_save_label',
    ];

    protected $jsonable = [
        'cookies',
    ];

    /**
     * Fixed list of Google Consent Mode v2 types (for mapping cookie groups).
     *
     * @var string[]
     */
    const CONSENT_TYPES = [
        'analytics_storage',
        'ad_storage',
        'ad_user_data',
        'ad_personalization',
        'functionality_storage',
        'personalization_storage',
        'security_storage',
    ];

    public $requiredPermissions = ['janvince.smallgdpr.access_cookies_settings'];

    public $settingsCode = 'janvince_smallgdpr_cookies_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'set_cookies_lifetime_days' => 'numeric',
    ];

    static function getSGCookies($sgCookiesPrefix = 'sg-cookies') {

        $sgCookiesPrefix = CookiesSettings::getSGCookiesLocalePrefix($sgCookiesPrefix);

        $sgCookies = [];

        $sgCookies['consent'] = !empty($_COOKIE[($sgCookiesPrefix . '-consent')]);

        foreach (CookiesSettings::get('cookies', []) as $cookie) {

            // REQUIRED are always ON
            if (!empty($cookie['required'])) {
                $sgCookies[$cookie['slug']] = 1;
                continue;
            }

            // DEFAULT ENABLED cookies are ON only when no general consent or when explicitly allowed
            if (!empty($cookie['default_enabled']) and empty($_COOKIE[($sgCookiesPrefix . '-consent')])) {
                $sgCookies[$cookie['slug']] = 1;
                continue;
            }

            // ALL OTHER by its consent state
            if (!empty($_COOKIE[($sgCookiesPrefix . '-' . $cookie['slug'])])) {
                $sgCookies[$cookie['slug']] = 1;
            }
        }

        return $sgCookies;

    }

    static function getSGCookiesLocalePrefix($sgCookiesPrefix = '') {

        if(CookiesSettings::get('set_cookies_with_locale', false))
        {
            $sgCookiesPrefix = $sgCookiesPrefix . '-' . App::getLocale();
        }

        return $sgCookiesPrefix;

    }

    /**
     * Maps a group slug → array of Google Consent Mode types.
     * Used by the frontend JS to build the consent update object on consent change.
     *
     * @return array<string, string[]>
     */
    static function getConsentMap() {

        $map = [];

        foreach (CookiesSettings::get('cookies', []) as $cookie) {

            if (empty($cookie['slug'])) {
                continue;
            }

            $types = !empty($cookie['consent_types']) ? (array) $cookie['consent_types'] : [];

            $map[$cookie['slug']] = array_values(array_intersect($types, self::CONSENT_TYPES));
        }

        return $map;
    }

    /**
     * Default Google consent state derived from the currently active cookie groups.
     * Used for gtag('consent', 'default', ...) before the tags are loaded
     * (a returning visitor with consent starts as 'granted').
     *
     * @return array<string, string> type => 'granted'|'denied'
     */
    static function getConsentDefaults() {

        $defaults = array_fill_keys(self::CONSENT_TYPES, 'denied');

        $activeCookies = CookiesSettings::getSGCookies();
        $map = CookiesSettings::getConsentMap();

        foreach ($map as $slug => $types) {

            if (empty($activeCookies[$slug])) {
                continue;
            }

            foreach ($types as $type) {
                $defaults[$type] = 'granted';
            }
        }

        return $defaults;
    }

    /**
     * Tag integration type: none|ga4|gtm.
     */
    static function getTagType() {

        return CookiesSettings::get('tag_type', 'none');
    }

    /**
     * Tag ID (G-… for GA4, GTM-… for Tag Manager).
     */
    static function getTagId() {

        return CookiesSettings::get('tag_id');
    }

    /**
     * Should the tag loader (GA4/GTM) and noscript be rendered?
     * When "production_only" is enabled, only in the production environment.
     */
    static function shouldRenderTags() {

        if (!CookiesSettings::get('production_only', true)) {
            return true;
        }

        return App::environment('production');
    }
}
