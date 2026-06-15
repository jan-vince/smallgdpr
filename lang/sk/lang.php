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
      'name' => 'Small GDPR',
      'description' => 'Všetko okolo cookies',
    ],

    'tabs' => [
      'cookies' => 'Cookies',
      'integration' => 'Integrácia',
      'cookies_list' => 'Skupiny cookies',
      'cookies_bar' => 'Cookies lišta',
      'cookies_manage' => 'Správa cookies',
      'settings' => 'Nastavenia',
      'import' => 'Import',
      'export' => 'Export',
    ],

    'form_fields' => [
      // Integration tab (v2)
      'tag_type' => 'Tag manager / analytika',
      'tag_type_description' => 'Ktorý Google tag má plugin načítať a riadiť podľa stavu súhlasu.',
      'tag_type_option_none' => 'Žiadny (tagy si načítaš sám)',
      'tag_type_option_ga4' => 'Google Analytics 4 (gtag.js)',
      'tag_type_option_gtm' => 'Google Tag Manager',
      'tag_id' => 'ID tagu',
      'tag_id_description' => 'Meracie ID GA4 (G-XXXXXXX) alebo ID kontajnera GTM (GTM-XXXXXXX). Plugin loader vykreslí automaticky.',
      'production_only' => 'Načítať tagy len na produkcii',
      'production_only_description' => 'Keď je zapnuté, loader tagu (GA4 / GTM) sa vykreslí iba v produkčnom prostredí. Cookie lišta funguje všade, takže UI sa dá testovať aj na deve.',
      'integration_custom_section' => 'Vlastný kód',
      'integration_custom_section_description' => 'Voliteľný vlastný kód vložený za blok pluginu. Pre tagy, ktoré plugin nenačítava priamo (Meta, LinkedIn, Hotjar, …).',
      'custom_head_code' => 'Vlastný kód do <head>',
      'custom_head_code_description' => 'Vloží sa do <head> hneď za consent blok pluginu. Použi vlastné <script>/<link> tagy.',
      'custom_body_code' => 'Vlastný kód do <body>',
      'custom_body_code_description' => 'Vloží sa na začiatok <body> za GTM noscript, pred cookie lištu.',
      'consent_event_name' => 'Názov dataLayer eventu súhlasu',
      'consent_event_name_description' => 'Odošle sa do dataLayer pri každej zmene súhlasu / načítaní stránky, aby non-Google tagy šli spúšťať cez Custom Event trigger.',
      'consent_types' => 'Google consent typy',
      'consent_types_description' => 'Ktoré signály Google Consent Mode táto skupina udeľuje. Plugin z aktívnych skupín zostaví consent update.',
      'scripts_position' => 'Umiestnenie',
      'scripts_position_description' => 'Kam skript vložiť.',
      'scripts_position_body' => 'Koniec <body>',
      'scripts_position_head' => '<head>',
      'buttons_section' => 'Tlačidlá',
      'buttons_section_description' => 'Texty a viditeľnosť tlačidiel lišty / dialógu nastavení.',
      'btn_accept_label' => 'Text tlačidla Prijať',
      'btn_save_label' => 'Text tlačidla Uložiť',
      'btn_save_label_description' => 'Použité v dialógu nastavení a na stránke správy.',
      'btn_reject_label' => 'Text tlačidla Odmietnuť',
      'btn_reject_show' => 'Zobraziť tlačidlo Odmietnuť',
      'btn_reject_show_description' => 'Odporúčané: odmietnuť by malo byť rovnako jednoduché ako prijať.',
      'btn_settings_label' => 'Text tlačidla Nastavenia',
      'btn_settings_show' => 'Zobraziť tlačidlo Nastavenia',
      'btn_settings_show_description' => 'Otvorí dialóg s podrobným výberom cookies.',

      'title' => 'Titulok',
      'content' => 'Obsah',
      'slug' => 'Kód',
      'description' => 'Popis',
      'cookies_list' => 'Skupiny cookies',
      'cookies_list_prompt' => 'Pridať skupinu',
      'cookie_required' => 'Nevyhnutné',
      'cookie_required_description' => 'Táto cookies nebude možné užívateľsky zakázať',
      'cookie_default_enabled' => 'Predvolené povolené',
      'cookie_default_enabled_description' => 'Táto cookie budú spustená aj bez výslovného súhlasu (malo by byť použité len pre anonymné dáta!).',
      'cookies_bar_content' => 'Obsah',
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
    ],
  ],

  'components' => [
    'cookies_config' => [
      'name' => 'Konfigurácia cookies (head)',
      'description' => 'Init Consent Mode + loader tagu. Umiestnite do <head>, čo najvyššie.',
    ],


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
