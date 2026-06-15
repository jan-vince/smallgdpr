<?php

return [

  'plugin' => [
    'name' => 'Small GDPR',
    'description' => 'Nástroje pro GDPR',
    'category' => 'Small plugins',
  ],

  'permissions' => [
    'access_cookies_settings' => 'Povolit správu nastavení cookies',
  ],

  'settings' => [

    'cookies' => [
      'name' => 'Small GDPR',
      'description' => 'Vše kolem cookies',
    ],

    'tabs' => [
      'cookies' => 'Cookies',
      'integration' => 'Integrace',
      'cookies_list' => 'Skupiny cookies',
      'cookies_bar' => 'Cookies lišta',
      'cookies_manage' => 'Správa cookies',
      'settings' => 'Nastavení',
      'import' => 'Import',
      'export' => 'Export',
    ],

    'form_fields' => [

      // Integration tab (v2)
      'tag_type' => 'Tag manager / analytika',
      'tag_type_description' => 'Který Google tag má plugin načíst a řídit podle stavu souhlasu.',
      'tag_type_option_none' => 'Žádný (tagy si načítáš sám)',
      'tag_type_option_ga4' => 'Google Analytics 4 (gtag.js)',
      'tag_type_option_gtm' => 'Google Tag Manager',
      'tag_id' => 'ID tagu',
      'tag_id_description' => 'Měřicí ID GA4 (G-XXXXXXX) nebo ID kontejneru GTM (GTM-XXXXXXX). Plugin loader vykreslí automaticky.',
      'production_only' => 'Načítat tagy jen na produkci',
      'production_only_description' => 'Když je zapnuto, loader tagu (GA4 / GTM) se vykreslí pouze v produkčním prostředí. Cookie lišta funguje všude, takže UI lze testovat i na devu.',
      'integration_custom_section' => 'Vlastní kód',
      'integration_custom_section_description' => 'Volitelný vlastní kód vložený za blok pluginu. Pro tagy, které plugin nenačítá přímo (Meta, LinkedIn, Hotjar, …).',
      'custom_head_code' => 'Vlastní kód do <head>',
      'custom_head_code_description' => 'Vloží se do <head> hned za consent blok pluginu. Použij vlastní <script> / <link> tagy.',
      'custom_body_code' => 'Vlastní kód do <body>',
      'custom_body_code_description' => 'Vloží se na začátek <body> za GTM noscript, před cookie lištu.',
      'consent_event_name' => 'Název dataLayer eventu souhlasu',
      'consent_event_name_description' => 'Odešle se do dataLayer při každé změně souhlasu / načtení stránky, aby non-Google tagy šly spouštět přes Custom Event trigger.',
      'consent_types' => 'Google consent typy',
      'consent_types_description' => 'Které signály Google Consent Mode tato skupina uděluje. Plugin z aktivních skupin sestaví consent update.',
      'scripts_position' => 'Umístění',
      'scripts_position_description' => 'Kam skript vložit.',
      'scripts_position_body' => 'Konec <body>',
      'scripts_position_head' => '<head>',
      'buttons_section' => 'Tlačítka',
      'buttons_section_description' => 'Texty a viditelnost tlačítek lišty / dialogu nastavení.',
      'btn_accept_label' => 'Text tlačítka Přijmout',
      'btn_save_label' => 'Text tlačítka Uložit',
      'btn_save_label_description' => 'Použito v dialogu nastavení a na stránce správy.',
      'btn_reject_label' => 'Text tlačítka Odmítnout',
      'btn_reject_show' => 'Zobrazit tlačítko Odmítnout',
      'btn_reject_show_description' => 'Doporučeno: odmítnout by mělo být stejně snadné jako přijmout.',
      'btn_settings_label' => 'Text tlačítka Nastavení',
      'btn_settings_show' => 'Zobrazit tlačítko Nastavení',
      'btn_settings_show_description' => 'Otevře dialog s podrobným výběrem cookies.',

      'title' => 'Titulek',
      'content' => 'Obsah',
      'slug' => 'Kód',
      'description' => 'Popis',
      'cookies_list' => 'Skupiny cookies',
      'cookies_list_prompt' => 'Přidat skupinu',
      'cookie_required' => 'Nezbytné',
      'cookie_required_description' => 'Tato cookies nebude možné uživatelsky zakázat',
      'cookie_default_enabled' => 'Výchozí povoleno',
      'cookie_default_enabled_description' => 'Tato cookies budou spuštěna i bez výslovného souhlasu (mělo by být použito jen pro anonymní data!).',
      'cookie_default_modal_checked' => 'Výchozí zaškrtnuto (v modálním okně)',
      'cookie_default_modal_checked_description' => 'Tato cookies budou před-zaškrtnuta v modálním okně, skripty se automaticky nespouštějí.',
      'cookies_bar_content' => 'Obsah',
      'import' => 'Importovat nastavení',
      'import_confirm' => 'Skutečně chcete importovat nastavení? Stará nastavení budou ztracena!',
      'import_default' => 'Importovat výchozí nastavení',
      'import_default_confirm' => 'Skutečně chcete importovat výchozí nastavení ze šablony: ',
      'import_path' => 'Cesta k souboru s konfigurací',
      'import_path_description' => 'Vyberte vlastní soubor s konfigurací nebo nechte prázdné a bude použita výchozí konfigurace ze souboru: ',
      'import_path_media' => 'Vyberte soubor importu z Médií',
      'import_path_media_description' => 'Tento soubor má přednost před ručně zadanou cestou níže.',
      'export' => 'Exportovat nastavení',
      'cookies_lifetime_days' => 'Expirace cookies (dnů)',
      'cookies_lifetime_days_comment' => 'Doba životnosti cookies v prohlížeči',
      'save_settings' => 'Uložit nastavení',
      'scripts' => 'Skripty',
      'scripts_title' => 'Titulek (volitelně)',
      'scripts_title_description' => 'Pouze pro interní označení',
      'scripts_prompt' => 'Přidat skript',
      'scripts_code' => 'Vlastní JS kód',
      'scripts_code_description' => 'Tyto skripty budou spuštěny, pokud je skupina vyžadovaná nebo povolená uživatelem. Prosím použijte značku "<script></script>" pro JS kód.',
      'scripts_file' => 'Spustit JS soubor',
      'scripts_file_description' => "Spustit tento soubor.",
      'scripts_run_production' => 'Spustit jen v produkčním režimu',
      'scripts_run_production_description' => "Spustí JS kód a soubor jen v produkčním režimu.",
      'scripts_disable' => 'Vypnuto',
      'scripts_disable_description' => 'Nespouštět tento skript',
      'scripts_run_pages' => 'Spustit jen na vybraných stránkách',
      'scripts_run_pages_description' => 'Můžete zadat jednu nebo více stránek, na kterých se má skript spustit.',
      'scripts_run_pages_list' => 'Spustit jen na těchto stránkách',
      'scripts_run_pages_list_prompt' => 'Přidat stránku',
      'page_url' => 'URL stránky',
      'page_url_description' => 'Relativní cesta, např.: /kontakt, /cs/produkty, ...',
      'disable_page_reload' => 'Zakázat obnovení stránky',
      'disable_page_reload_description' => 'Neobnovovat stránku po nastavení cookies.',
      'set_cookies_with_locale' => 'Nastavit pro každý jazyk zvlášť',
      'set_cookies_with_locale_comment' => 'Pokud je povoleno, bude souhlas s cookies požadován pro každý jazyk webu zvlášť (užitečné, pokud nemáte ve všech jazycích stejné kódy skupin cookies; vyžaduje plugin Rainlab Translate).',
    ],
  ],

  'components' => [

    'cookies_config' => [
      'name' => 'Cookies config (head)',
      'description' => 'Init Consent Mode + loader tagu. Umístit do <head>, co nejvýš.',
    ],

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

      'file_name' => 'Nebo vložte cestu k importovacímu souboru ručně',
      'file_name_comment' => 'Celá cesta k souboru.',
      'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.cs.yaml',
      'import_confirm' => 'Opravdu chcete importovat data?',

      'flash' => [
        'import_successfull' => 'Data byla úspěšně importována',
        'import_error' => 'Nepodařilo se importovat data. Víc informací v systémovém protokolu.',
        'parse_error' => 'Nepodařilo se zpracovat data ze souboru. Víc informací v systémovém protokolu.',
        'file_error' => 'Nepodařilo se nalézt soubor! Zkontrolujte název a cestu.',
        'file_missing_error' => 'Žádný soubor nebyl vybrán!',
      ],
    ],
    'exportpreset' => [

      'file_name' => 'Cesta k souboru',
      'file_name_comment' => 'Kompletní cesta k exportovanému souboru.',
      'file_name_default' => '/storage/app/media/small-gdpr-export.yaml',

      'flash' => [
        'export_successfull' => 'Data byla úspěšně exportována',
        'export_error' => 'Nepodařilo se exportovat data. Víc informací v systémovém protokolu.',
        'parse_error' => 'Nepodařilo se zpracovat data nastavení. Víc informací v systémovém protokolu.',
        'file_error' => 'Nepodařilo se zapsat do souboru! Zkontrolujte název a cestu.',
      ],
    ],
  ],
];
