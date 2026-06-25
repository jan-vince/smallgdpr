<?php

namespace JanVince\SmallGDPR\Components;

use Cms\Classes\ComponentBase;
use JanVince\SmallGDPR\Models\CookiesSettings;

/**
 * Head component — renders the Consent Mode base (dataLayer + gtag stub +
 * consent default seeded from cookies) + the tag loader (GA4/GTM per settings) +
 * custom head code + loads the plugin JS. Belongs as high as possible in <head>.
 */
class CookiesConfig extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'janvince.smallgdpr::lang.components.cookies_config.name',
            'description' => 'janvince.smallgdpr::lang.components.cookies_config.description',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $groups = [];

        foreach (CookiesSettings::get('cookies', []) as $cookie) {

            if (empty($cookie['slug'])) {
                continue;
            }

            $groups[] = [
                'slug'     => $cookie['slug'],
                'required' => !empty($cookie['required']),
            ];
        }

        $this->page['sgConfig'] = [
            'cookiePrefix' => CookiesSettings::getSGCookiesLocalePrefix('sg-cookies'),
            'lifetimeDays' => (int) (CookiesSettings::get('set_cookies_lifetime_days') ?: 365),
            'consentMap'   => CookiesSettings::getConsentMap(),
            'consentTypes' => CookiesSettings::CONSENT_TYPES,
            'groups'       => $groups,
            'eventName'    => CookiesSettings::get('consent_event_name') ?: 'cookie_consent_update',
        ];

        $this->page['sgConsentDefault'] = array_merge(
            CookiesSettings::getConsentDefaults(),
            ['wait_for_update' => 500]
        );

        $this->page['sgTagType'] = CookiesSettings::getTagType();
        $this->page['sgTagId'] = CookiesSettings::getTagId();
        $this->page['sgRenderTags'] = CookiesSettings::shouldRenderTags();

        // Per-group head scripts (@run-scripts) need the cookie state
        $this->page['sgCookies'] = CookiesSettings::getSGCookies();
    }
}
