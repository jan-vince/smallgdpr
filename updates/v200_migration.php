<?php

namespace JanVince\SmallGDPR\Updates;

use JanVince\SmallGDPR\Models\CookiesSettings;
use October\Rain\Database\Updates\Migration;
use Log;

/**
 * Migration to v2.0.0 — best-effort transfer of existing settings into the new schema.
 *
 * - fills consent_types for groups based on the slug (statistical→analytics, marketing→ads, required→functionality/security)
 * - carries over the button labels from the old cookies_bar_buttons repeater
 * - sets default values for the new fields (tag_type, production_only, consent_event_name, disable reload)
 *
 * New content (loaders etc.) is filled in by the admin — old pasted GA/GTM snippets
 * remain in the group scripts, but switching to the Tag ID field is recommended.
 */
class v200_migration extends Migration
{
    public function up()
    {
        $settings = CookiesSettings::instance();

        try {
            $this->migrateCookieGroups($settings);
            $this->migrateButtonLabels($settings);
            $this->setDefaults($settings);

            $settings->save();

            Log::info('SG: Successful data migration to v2.0.0.');

        } catch (\Exception $e) {
            Log::error('SG: Error running v2.0.0 migration! ' . $e->getMessage());
        }
    }

    public function down()
    {
        // Irreversible migration
    }

    /**
     * Fills consent_types for groups that do not have them yet.
     */
    protected function migrateCookieGroups(CookiesSettings $settings): void
    {
        $groups = $settings->get('cookies');

        if (!is_array($groups)) {
            return;
        }

        foreach ($groups as $key => $group) {

            if (!empty($group['consent_types'])) {
                continue;
            }

            $group['consent_types'] = $this->guessConsentTypes($group);
            $groups[$key] = $group;
        }

        $settings->cookies = $groups;
    }

    /**
     * Heuristic slug → Google consent types.
     *
     * @param array $group
     * @return string[]
     */
    protected function guessConsentTypes(array $group): array
    {
        if (!empty($group['required'])) {
            return ['functionality_storage', 'security_storage'];
        }

        $slug = strtolower($group['slug'] ?? '');

        if (str_contains($slug, 'stat') || str_contains($slug, 'tilasto') || str_contains($slug, 'analy')) {
            return ['analytics_storage'];
        }

        if (str_contains($slug, 'market') || str_contains($slug, 'markkinoin') || str_contains($slug, 'reklam')) {
            return ['ad_storage', 'ad_user_data', 'ad_personalization'];
        }

        return [];
    }

    /**
     * Carries over the button labels from the old cookies_bar_buttons repeater.
     */
    protected function migrateButtonLabels(CookiesSettings $settings): void
    {
        $buttons = $settings->get('cookies_bar_buttons');

        if (!is_array($buttons)) {
            return;
        }

        foreach ($buttons as $button) {

            if (empty($button['title'])) {
                continue;
            }

            if (!empty($button['accept_all_cookies_btn'])) {
                $settings->btn_accept_label = $button['title'];
            } elseif (!empty($button['disable_all_cookies_btn'])) {
                $settings->btn_reject_label = $button['title'];
            } elseif (!empty($button['show_modal'])) {
                $settings->btn_settings_label = $button['title'];
            }
        }
    }

    /**
     * Default values for the new fields.
     */
    protected function setDefaults(CookiesSettings $settings): void
    {
        if (!$settings->get('tag_type')) {
            $settings->tag_type = 'none';
        }

        if (!$settings->get('consent_event_name')) {
            $settings->consent_event_name = 'cookie_consent_update';
        }

        $settings->production_only = 1;
        $settings->cookies_bar_disable_page_reload = 1;
        $settings->cookies_manage_disable_page_reload = 1;
    }
}
