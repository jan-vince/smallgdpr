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
      'name' => 'Cookies',
      'description' => 'Everything about cookies',
    ],

    'tabs' => [
      'cookies_list' => 'Cookies groups',
      'cookies_bar' => 'Cookies bar',
      'cookies_manage' => 'Manage cookies',
      'settings' => 'Settings',
      'import' => 'Import',
      'export' => 'Export',
    ],

    'form_fields' => [
      'title' => 'Title',
      'content' => 'Content',
      'slug' => 'Code',
      'url' => 'URL',
      'url_description' => 'Set to # if you want to stay on a current page after page reload.',
      'url_external' => 'External URL',
      'url_external_description' => 'The URL leads to a page outside of this web (eg. https://www.google.com).',
      'description' => 'Description',
      'purpose' => 'Purpose',
      'purpose_description' => '',
      'cookies_list' => 'Cookies groups',
      'cookies_list_description' => 'Eg. Necessary, Statistical, ...',
      'cookies_list_prompt' => 'Add a group',
      'cookie_required' => 'Required',
      'cookie_required_description' => 'This cookies cannot be disabled by user',
      'cookie_default_enabled' => 'Default enabled',
      'cookie_default_enabled_description' => 'This cookies will be executed even without explicit concent (should be used only for anonymous data!).',
      'cookies_manager' => 'Manage cookies',
      'cookies_bar_buttons' => 'Buttons',
      'cookies_bar_buttons_prompt' => 'Add buttons',
      'cookies_bar_content' => 'Content',
      'css_class' => 'CSS class',
      'add_css' => 'Use default CSS styles',
      'add_css_description' => 'Automatically inserts default bar styles',
      'add_css_empty_option' => 'No styles',
      'add_css_option_rbbox' => 'Box (right bottom corner)',
      'add_css_option_topline' => 'Strip (on top)',
      'accept_all_cookies_btn' => 'Allow all cookies',
      'accept_all_cookies_btn_description' => 'By clicking on this button, all cookies will be accepted automatically and the bar will disappear.',
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
      'html_attributes' => 'HTML tag attributes',
      'show_modal' => 'Open modal window',
      'show_modal_description' => 'Open modal window with cookies settings by clicking on this button (for now works only when Bootstrap style is enabled on Settings tab).',
      'disable_page_reload' => 'Disable page reload',
      'disable_page_reload_description' => 'Do not reload page after cookies are set.',
      'empty_option' => 'Select an option',
      'cancel' => 'Cancel',
      'ui_style' => 'UI style',
      'ui_style_description' => 'Components can format HTML for specific framework',
      'ui_style_option_empty' => 'Pure HTML',
    ],
  ],

  'components' => [

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