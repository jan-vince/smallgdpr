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
      'name' => 'Cookies',
      'description' => 'Vše kolem cookies',
    ],

    'tabs' => [
      'cookies_list' => 'Skupiny cookies',
      'cookies_bar' => 'Cookies lišta',
      'cookies_manage' => 'Správa cookies',
      'settings' => 'Nastavení',
      'import' => 'Import',
      'export' => 'Export',
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
      'cookie_default_enabled' => 'Výchozí povoleno',
      'cookie_default_enabled_description' => 'Tato cookies budou spuštěna i bez výslovného souhlasu (mělo by být použito jen pro anonymní data!).',
      'cookies_manager' => 'Správa cookies',
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
      'import_path' => 'Cesta k souboru s konfigurací',
      'import_path_description' => 'Vyberte vlastní soubor s konfigurací nebo nechte prázdné a bude použita výchozí konfigurace ze seouboru: ',
      'import_path_media' => 'Vyberte soubor importu z Médií',
      'import_path_media_description' => 'Tento soubor má přednost před ručně zadanou cestou níže.',
      'export' => 'Exportovat nastavení',
      'cookies_lifetime_days' => 'Expirace cookies (dnů)',
      'cookies_lifetime_days_comment' => 'Doba životnosti cookies v prohlížeči',
      'save_settings' => 'Uložit nastavení',
      'scripts' => 'Skripty',
      'scripts_title' => 'Titulek (volitelně)',
      'scripts_title_description' => 'Pouze pro interní označení',
      'scripts_code' => 'Vlastní JS kód',
      'scripts_code_description' => 'Tyto skripty budou spuštěny, pokud je skupina vyžadovaná nebo povolená uživatelem. Prosím použijte značku "<script></script>" pro JS kód.',
      'scripts_file' => 'Spustit JS soubor',
      'scripts_file_description' => "Spustit tento soubor.",
      'scripts_run_production' => 'Spustit jen v produkčním režimu',
      'scripts_run_production_description' => "Spustí JS kód a soubor jen v produkčním režimu.",
      'attributes' => 'HTML atributy značky',
      'show_modal' => 'Otevřít vyskakovací okno',
      'show_modal_description' => 'Klenutím na toto tlačítko se zobrazí modální okno s nastavením cookies (nyní funguje pouze pokud je vybraný styl Boostrap na záložce Nastavení)',
      'empty_option' => 'Vyberte z možností',
      'cancel' => 'Zrušit',
      'ui_style' => 'Styl rozhraní',
      'ui_style_description' => 'Komponenty mohou zobrazit obsah upravený pro konkrétní framework',
      'ui_style_option_empty' => 'Čisté HTML',
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

      'file_name' => 'Nebo můžete vložit cestu k importovacímu souboru ručně',
      'file_name_comment' => 'Bude použit jen pokud není vybrán soubor z Médií! Nechte prázdné a použije se výchozí soubor importu.',
      'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.cs.yaml',
      'import_confirm' => 'opravdu chcete importovat data?',

      'flash' => [
        'import_successfull' => 'Data byla úspěšně importována',
        'import_error' => 'Nepodařilo se importovat data. Víc informací v systémovém protokolu.',
        'parse_error' => 'Nepodařilo se zpracovat data ze souboru. Víc informací v systémovém protokolu.',
        'file_error' => 'Nepodařilo se nalézt soubor! Zkontrolujte název a cestu.',
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
