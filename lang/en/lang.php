<?php

return [

  'plugin' => [
    'name' => 'Small GDPR',
    'description' => 'Toolbox for GDPR',
    'category' => 'Small plugins',
  ],

  'persmissions' => [
    'access_settings' => 'Allow access to settings',
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
    ],

    'form_fields' => [
      'title' => 'Title',
      'content' => 'Content',
      'slug' => 'Code',
      'url' => 'URL',
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
      'cookies_manager' => 'Manage cookies',
      'default_active' => 'Active without consent',
      'default_active_description' => 'These cookies will be active without explicit conset',
      'cookies_bar_buttons' => 'Buttons',
      'cookies_bar_buttons_prompt' => 'Add buttons',
      'cookies_bar_content' => 'Content',
      'css_class' => 'CSS class',
      'add_css' => 'Use default CSS styles',
      'add_css_description' => 'Automatically inserts default bar styles',
      'accept_all_cookies_btn' => 'Allow all cookies',
      'accept_all_cookies_btn_description' => 'By clicking on this button, all cookies will be accepted automatically and the bar will disappear.',
      'import' => 'Import settings',
      'import_confirm' => 'Are you sure you want to import settings? Old settings will be lost!',
      'cookies_lifetime_days' => 'Cookies expiration (in days)',
      'cookies_lifetime_days_comment' => 'The lifetime of cookies in the browser',
      'save_settings' => 'Save settings',
      'scripts_code' => 'Run JS code',
      'scripts_code_description' => 'These scripts will be executed if required or if allowed by user. Do not use "<script></script>" tag, it will be added automatically.',
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

      'file_name' => 'Path to the settings file',
      'file_name_comment' => 'Complete path to the file.',
      'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.en.yaml',

      'flash' => [
        'import_successfull' => 'Data was imported successfully',
        'import_error' => 'Failed to import data. More information in the system log.',
        'parse_error' => 'Failed to process data from file. More information in the system log.',
        'file_error' => 'Could not find file! Check the name and path.',
      ],
    ],
  ],
];
