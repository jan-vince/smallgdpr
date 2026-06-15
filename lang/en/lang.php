<?php

return [

  'plugin' => [
    'name' => 'Small GDPR',
    'description' => 'Toolbox for GDPR',
    'category' => 'Small plugins',
  ],

  'permissions' => [
    'access_cookies_settings' => 'Allow access to cookies settings',
  ],

  'settings' => [

    'cookies' => [
      'name' => 'Small GDPR',
      'description' => 'Everything about cookies',
    ],

    'tabs' => [
      'cookies' => 'Cookies',
      'integration' => 'Integration',
      'cookies_list' => 'Cookies groups',
      'cookies_bar' => 'Cookies bar',
      'cookies_manage' => 'Manage cookies',
      'settings' => 'Settings',
      'import' => 'Import',
      'export' => 'Export',
    ],

    'form_fields' => [

      // Integration tab (v2)
      'tag_type' => 'Tag manager / analytics',
      'tag_type_description' => 'Which Google tag should the plugin load and drive with the consent state.',
      'tag_type_option_none' => 'None (load tags yourself)',
      'tag_type_option_ga4' => 'Google Analytics 4 (gtag.js)',
      'tag_type_option_gtm' => 'Google Tag Manager',
      'tag_id' => 'Tag ID',
      'tag_id_description' => 'GA4 measurement ID (G-XXXXXXX) or GTM container ID (GTM-XXXXXXX). The plugin renders the loader automatically.',
      'production_only' => 'Load tags only in production',
      'production_only_description' => 'When enabled, the tag loader (GA4 / GTM) is rendered only in the production environment. The cookie bar still works everywhere so you can test the UI.',
      'integration_custom_section' => 'Custom code',
      'integration_custom_section_description' => 'Optional raw code injected after the plugin block. Use for tags the plugin does not load directly (Meta, LinkedIn, Hotjar, …).',
      'custom_head_code' => 'Custom <head> code',
      'custom_head_code_description' => 'Inserted into <head> right after the plugin consent block. Include your own <script> / <link> tags.',
      'custom_body_code' => 'Custom <body> code',
      'custom_body_code_description' => 'Inserted at the top of <body> after the GTM noscript, before the cookie bar.',
      'consent_event_name' => 'Consent dataLayer event name',
      'consent_event_name_description' => 'Pushed to dataLayer on every consent change/page load so non-Google tags can fire via a Custom Event trigger.',
      'consent_types' => 'Google consent types',
      'consent_types_description' => 'Which Google Consent Mode signals this group grants. The plugin builds the consent update from the active groups.',
      'scripts_position' => 'Position',
      'scripts_position_description' => 'Where to inject this script.',
      'scripts_position_body' => 'End of <body>',
      'scripts_position_head' => '<head>',
      'buttons_section' => 'Buttons',
      'buttons_section_description' => 'Labels and visibility of the bar / settings dialog buttons.',
      'btn_accept_label' => 'Accept button label',
      'btn_save_label' => 'Save button label',
      'btn_save_label_description' => 'Used in the settings dialog and on the manage page.',
      'btn_reject_label' => 'Reject button label',
      'btn_reject_show' => 'Show reject button',
      'btn_reject_show_description' => 'Recommended: rejecting should be as easy as accepting.',
      'btn_settings_label' => 'Settings button label',
      'btn_settings_show' => 'Show settings button',
      'btn_settings_show_description' => 'Opens the dialog with granular cookie choices.',

      'title' => 'Title',
      'content' => 'Content',
      'slug' => 'Code',
      'description' => 'Description',
      'cookies_list' => 'Cookies groups',
      'cookies_list_prompt' => 'Add a group',
      'cookie_required' => 'Required',
      'cookie_required_description' => 'This cookies cannot be disabled by user',
      'cookie_default_enabled' => 'Default enabled',
      'cookie_default_enabled_description' => 'This cookies will be executed even without explicit concent (should be used only for anonymous data!).',
      'cookie_default_modal_checked' => 'Default checked (in modal)',
      'cookie_default_modal_checked_description' => 'This cookies will be pre-checked in modal window, scripts are not fired.',
      'cookies_bar_content' => 'Content',
      'import' => 'Import settings',
      'import_confirm' => 'Are you sure you want to import settings? Old settings will be lost!',
      'import_default' => 'Import default settings',
      'import_default_confirm' => 'Are you sure you want to import default settings from template: ',
      'import_path' => 'Path to your config file',
      'import_path_description' => 'Select your settings file or leave empty for a default preset file: ',
      'import_path_media' => 'Select import file from Media',
      'import_path_media_description' => 'This file has presedence over the manually entered path below.',
      'export' => 'Export settings',
      'cookies_lifetime_days' => 'Cookies expiration (in days)',
      'cookies_lifetime_days_comment' => 'The lifetime of cookies in the browser',
      'save_settings' => 'Save settings',
      'scripts' => 'Scripts',
      'scripts_title' => 'Title (optional)',
      'scripts_title_description' => 'Only used for description',
      'scripts_prompt' => 'Add skript',
      'scripts_code' => 'Custom JS code',
      'scripts_code_description' => 'This code will be included if group is required or allowed by user. Please use "<script></script>" tags for JS code.',
      'scripts_file' => 'Run JS file',
      'scripts_file_description' => "Execute this file.",
      'scripts_run_production' => 'Run only in production',
      'scripts_run_production_description' => "Execute JS code and file only in production environment.",
      'scripts_disable' => 'Disable',
      'scripts_disable_description' => 'Do not run this scripts.',
      'scripts_run_pages' => 'Run on specific pages only',
      'scripts_run_pages_description' => 'You can specify one or more pages where this script will run.',
      'scripts_run_pages_list' => 'Run on these pages only',
      'scripts_run_pages_list_prompt' => 'Add page',
      'page_url' => 'Page URL',
      'page_url_description' => 'Relative path, eg.: /contact, /en/products, ...',
      'disable_page_reload' => 'Disable page reload',
      'disable_page_reload_description' => 'Do not reload page after cookies are set.',
      'set_cookies_with_locale' => 'Set cookies for each language',
      'set_cookies_with_locale_comment' => 'If set, cookies consent will be required for each language separately (useful if you do not have same cookies group code for all languages; requires Rainlab Translate plugin).',
    ],
  ],

  'components' => [

    'cookies_config' => [
      'name' => 'Cookies config (head)',
      'description' => 'Consent Mode init + tag loader. Place inside <head>, as high as possible.',
    ],

    'cookies_bar' => [
      'name' => 'Cookies bar',
      'description' => 'Bar with information about used cookies',
    ],

    'cookies_manage' => [
      'name' => 'Manage cookies',
      'description' => 'Component for user management of cookies',
    ],
  ],

  'formwidgets' => [
    
    'importpreset' => [

      'file_name' => 'Or enter your import file path manually',
      'file_name_comment' => 'Complete path to the file.',
      'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.en.yaml',
      'import_confirm' => 'Do you really want to import your data?',
      
      'flash' => [
        'import_successfull' => 'Data was imported successfully',
        'import_error' => 'Failed to import data. More information in the system log.',
        'parse_error' => 'Failed to process data from file. More information in the system log.',
        'file_error' => 'Could not find file! Check the name and path.',
        'file_missing_error' => 'No file was selected!',
      ],
    ],
    'exportpreset' => [

      'file_name' => 'Path to the file',
      'file_name_comment' => 'Complete path to the exported file.',
      'file_name_default' => '/storage/app/media/small-gdpr-export.yaml',

      'flash' => [
        'export_successfull' => 'Data was imported successfully',
        'export_error' => 'There was an error while exporting. More info in system log.',
        'parse_error' => 'Failed to process settings data. More information in the system log.',
        'file_error' => 'Could not write to file! Check the name and path.',
      ],
    ],
  ],
];