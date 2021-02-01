<?php

return [

  'plugin' => [
    'name' => 'Small GDPR',
    'description' => 'Nástroje pre GDPR',
    'category' => 'Small plugins',
  ],

  'permissions' => [
    'access_cookies_settings' => 'Povoliť správu nastavení cookies',
  ],

  'settings' => [

    'cookies' => [
      'name' => 'Cookies',
      'description' => 'Všetko okolo cookies',
    ],

    'tabs' => [
      'cookies_list' => 'Skupiny cookies',
      'cookies_bar' => 'Cookies lišta',
      'cookies_manage' => 'Správa cookies',
      'settings' => 'Nastavenia',
      'import' => 'Import',
      'export' => 'Export',
    ],

    'form_fields' => [
      'title' => 'Titulok',
      'content' => 'Obsah',
      'slug' => 'Kód',
      'url' => 'URL',
      'url_external' => 'Externé URL',
      'url_external_description' => 'Adresa URL vedie na stránku mimo tohto web (napr. https://www.google.com).',
      'description' => 'Popis',
      'purpose' => 'Účel',
      'purpose_description' => '',
      'cookies_list' => 'Skupiny cookies',
      'cookies_list_description' => 'Napr. Nevyhnutná cookies, Štatistická cookies, ...',
      'cookies_list_prompt' => 'Pridať skupinu',
      'cookie_required' => 'Nevyhnutné',
      'cookie_required_description' => 'Táto cookies nebude možné užívateľsky zakázať',
      'cookie_default_enabled' => 'Predvolené povolené',
      'cookie_default_enabled_description' => 'Táto cookie budú spustená aj bez výslovného súhlasu (malo by byť použité len pre anonymné dáta!).',
      'cookies_manager' => 'Správa cookies',
      'cookies_bar_buttons' => 'Tlačidlá',
      'cookies_bar_buttons_prompt' => 'Pridať tlačidlo',
      'cookies_bar_content' => 'Obsah',
      'css_class' => 'CSS třída',
      'add_css' => 'Použiť predvolenú CSS štýly',
      'add_css_description' => 'Automaticky vloží predvolené štýly lišty',
      'add_css_empty_option' => 'Žiadne štýly',
      'add_css_option_rbbox' => 'Box (pravý spodný okraj)',
      'add_css_option_topline' => 'Prúžok (hore)',
      'accept_all_cookies_btn' => 'Povolí všetky cookie',
      'accept_all_cookies_btn_description' => 'Kliknutím na toto tlačidlo budú automaticky akceptovaný všetky cookie a lišta zmizne.',
      'import' => 'Importovať nastavenia',
      'import_confirm' => 'Naozaj chcete importovať nastavenia? Stará nastavenia budú stratené!',
      'import_default' => 'Importovať predvolené nastavenia',
      'import_default_confirm' => 'Naozaj chcete importovať predvolené nastavenia zo šablóny:',
      'import_path' => 'Cesta k súboru s konfiguráciou',
      'import_path_description' => 'Vyberte vlastný súbor s konfiguráciou alebo nechajte prázdne a bude použitá predvolená konfigurácia zo souboru: ',
      'import_path_media' => 'Vyberte súbor importu z Médií',
      'import_path_media_description' => 'Tento súbor má prednosť pred ručne zadanú cestou nižšie.',
      'export' => 'Exportovať nastavenia',
      'cookies_lifetime_days' => 'Expirácie cookies (dní)',
      'cookies_lifetime_days_comment' => 'Doba životnosti cookies v prehliadači',
      'save_settings' => 'Uložiť nastavenia',
      'scripts' => 'Skripty',
      'scripts_title' => 'Titulok (voliteľne)',
      'scripts_title_description' => 'Len pre interné označenie',
      'scripts_code' => 'Vlastné JS kód',
      'scripts_code_description' => 'Tieto skripty budú spustené, ak je skupina vyžadovaná alebo povolená užívateľom. Prosím použite značku "<script> </script>" pre JS kód.',
      'scripts_file' => 'Spustiť JS súbor',
      'scripts_file_description' => "Spustiť tento súbor.",
      'scripts_run_production' => 'Spustiť len v produkčnom režime',
      'scripts_run_production_description' => "Spustí JS kód a súbor len v produkčnom režime.",
      'scripts_run_pages' => 'Spustiť len na vybraných stránkach',
      'scripts_run_pages_description' => 'Môžete zadať jednu alebo viac stránok, na ktorých sa má skript spustiť.',
      'scripts_run_pages_list' => 'Spustiť len na týchto stránkach',
      'scripts_run_pages_list_prompt' => 'Pridať stránku',
      'page_url' => 'URL stránky',
      'page_url_description' => 'Relatívna cesta, napr .: /kontakt, / sk/produkty, ...',
      'html_attributes' => 'HTML atribúty značky',
      'show_modal' => 'Otvoriť vyskakovacie okno',
      'show_modal_description' => 'Kliknutím na toto tlačidlo sa zobrazí modálne okno s nastavením cookies (teraz funguje len ak je vybraný štýl Boostrap na záložke Nastavenie)',
      'empty_option' => 'Vyberte z možností',
      'cancel' => 'Zrušiť',
      'ui_style' => 'Štýl rozhranie',
      'ui_style_description' => 'Komponenty môžu zobraziť obsah upravený pre konkrétny framework',
      'ui_style_option_empty' => 'Čisté HTML',
    ],
  ],

  'components' => [

    'cookies_bar' => [
      'name' => 'Cookies lišta',
      'description' => 'Lišta s informáciami o použitých cookies',
    ],

    'cookies_manage' => [
      'name' => 'Správa cookies',
      'description' => 'Komponenta pre užívateľskú správu cookies',
    ],
  ],

  'formwidgets' => [
    
    'importpreset' => [

      'file_name' => 'Alebo vložte cestu k importovacímu súboru ručne',
      'file_name_comment' => 'Celá cesta k súboru.',
      'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.cs.yaml',
      'import_confirm' => 'Naozaj chcete importovať dáta?',

      'flash' => [
        'import_successfull' => 'Dáta boli úspešne importovaná',
        'import_error' => 'Nepodarilo sa importovať dáta. Viac informácií v systémovom protokole.',
        'parse_error' => 'Nepodarilo sa spracovať dáta zo súboru. Viac informácií v systémovom protokole.',
        'file_error' => 'Nepodarilo sa nájsť súbor! Skontrolujte názov a cestu.',
      ],
    ],
    'exportpreset' => [

      'file_name' => 'Cesta k súboru',
      'file_name_comment' => 'Kompletné cesta k exportovanému súboru.',
      'file_name_default' => '/storage/app/media/small-gdpr-export.yaml',

      'flash' => [
        'export_successfull' => 'Dáta boli úspešne exportovaná',
        'export_error' => 'Nepodarilo sa exportovať dáta. Viac informácií v systémovom protokole.',
        'parse_error' => 'Nepodarilo sa spracovať dáta nastavenia. Viac informácií v systémovom protokole.',
        'file_error' => 'Nepodarilo sa zapísať do súboru! Skontrolujte názov a cestu.',
      ],
    ],
  ],
];
