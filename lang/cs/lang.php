<?php

return [

  'plugin' => [
    'name' => 'Small GDPR',
    'description' => 'Nástroje pro GDPR',
    'category' => 'Small plugins',
  ],

  'persmissions' => [
    'access_settings' => 'Povolit správu nastavení',
  ],

  'settings' => [

    'cookies' => [
      'name' => 'Cookies',
      'description' => 'Vše kolem cookies',
    ],

    'tabs' => [
      'cookies_list' => 'Skupiny cookies',
      'cookies_bar' => 'Cookies lišta',
      'cookies_manage' => 'Správa cookies',
      'settings' => 'Nastavení',
      'import' => 'Import',
    ],

    'form_fields' => [
      'title' => 'Titulek',
      'content' => 'Obsah',
      'slug' => 'Kód',
      'url' => 'URL',
      'url_external' => 'Externí URL',
      'url_external_description' => 'Adresa URL vede na stránku mimo tento web (např. https://www.google.com).',
      'description' => 'Popis',
      'purpose' => 'Účel',
      'purpose_description' => '',
      'cookies_list' => 'Skupiny cookies',
      'cookies_list_description' => 'Např. Nezbytná cookies, Statistická cookies, ...',
      'cookies_list_prompt' => 'Přidat skupinu',
      'cookie_required' => 'Nezbytné',
      'cookie_required_description' => 'Tato cookies nebude možné uživatelsky zakázat',
      'cookies_manager' => 'Správa cookies',
      'default_active' => 'Aktivní i bez souhlasu',
      'default_active_description' => 'Tato cookies budou aktivní i bez souhlasu',
      'cookies_bar_buttons' => 'Tlačítka',
      'cookies_bar_buttons_prompt' => 'Přidat tlačítko',
      'cookies_bar_content' => 'Obsah',
      'css_class' => 'CSS třída',
      'add_css' => 'Použít výchozí CSS styly',
      'add_css_description' => 'Automaticky vloží výchozí styly lišty',
      'accept_all_cookies_btn' => 'Povolí všechna cookies',
      'accept_all_cookies_btn_description' => 'Kliknutím na toto tlačítko budou automaticky přijmuta všechna cookies a lišta zmizí.',
      'import' => 'Importovat nastavení',
      'import_confirm' => 'Skutečně chcete importovat nastavení? Stará nastavení budou ztracena!',
      'cookies_lifetime_days' => 'Expirace cookies (dnů)',
      'cookies_lifetime_days_comment' => 'Doba životnosti cookies v prohlížeči',
      'save_settings' => 'Uložit nastavení',
      'scripts_code' => 'Spouštět JS kód',
      'scripts_code_description' => 'Tyto skripty budou spuštěny, pokud jsou vyžadované nebo povolené uživatelem. Nepoužívejte značku "<script></script>", bude přidána automaticky.',
    ],
  ],

  'components' => [

    'cookies_bar' => [
      'name' => 'Cookies lišta',
      'description' => 'Lišta s informacemi o použitých cookies',
    ],

    'cookies_manage' => [
      'name' => 'Správa cookies',
      'description' => 'Komponenta pro uživatelskou správu cookies',
    ],
  ],

  'formwidgets' => [
    
    'importpreset' => [

      'file_name' => 'Cesta k souboru s nastaveními',
      'file_name_comment' => 'Kompletní cesta k souboru.',
      'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.cs.yaml',

      'flash' => [
        'import_successfull' => 'Data byla úspěšně importována',
        'import_error' => 'Nepodařilo se importovat data. Víc informací v systémovém protokolu.',
        'parse_error' => 'Nepodařilo se zpracovat data ze souboru. Víc informací v systémovém protokolu.',
        'file_error' => 'Nepodařilo se nalézt soubor! Zkontrolujte název a cestu.',
      ],
    ],
  ],
];
