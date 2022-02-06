<?php

return [

  'plugin' => [
    'name' => 'Pieni GDPR-laajennos',
    'description' => 'Laajennos sivuston GDPR-yhteensopivuutta varten',
    'category' => 'Pienet laajennokset',
  ],

  'permissions' => [
    'access_cookies_settings' => 'Salli pääsy evästeasetuksiin',
  ],

  'settings' => [

    'cookies' => [
      'name' => 'Evästeet',
      'description' => 'Kaikki evästeistä',
    ],

    'tabs' => [
      'cookies_list' => 'Evästeryhmät',
      'cookies_bar' => 'Evästepalkki',
      'cookies_manage' => 'Hallinnoi evästeitä',
      'settings' => 'Asetukset',
      'import' => 'Tuonti',
      'export' => 'Vienti',
    ],

    'form_fields' => [
      'title' => 'Otsikko',
      'content' => 'Sisältö',
      'slug' => 'Koodi',
      'url' => 'URL',
      'url_description' => 'Aseta #, jos haluat pysyä ladatulla sivulla uudelleen latauksen jälkeen.',
      'url_external' => 'Ulkopuolinen URL',
      'url_external_description' => 'URL johdattaa ulkopuoliseen sivustoon (esim. https://www.google.com).',
      'description' => 'Kuvaus',
      'purpose' => 'Tarkoitus',
      'purpose_description' => '',
      'cookies_list' => 'Evästeryhmät',
      'cookies_list_description' => 'Esim. Pakollinen, Tilastollinen, ...',
      'cookies_list_prompt' => 'Lisää ryhmä',
      'cookie_required' => 'Pakollinen',
      'cookie_required_description' => 'Tätä evästettä käyttäjä ei voi ottaa pois käytöstä',
      'cookie_default_enabled' => 'Oletuksena päällä',
      'cookie_default_enabled_description' => 'Tämä eväste käytetään, vaikka käyttäjä ei hyväksyisi evästeitä (tulee käyttää vain anonyymin datan kanssa!).',
      'cookies_manager' => 'Hallinnoi evästeitä',
      'cookies_bar_buttons' => 'Nappulat',
      'cookies_bar_buttons_prompt' => 'Lisää nappulat',
      'cookies_bar_content' => 'Sisältö',
      'css_class' => 'CSS-luokka',
      'add_css' => 'Käytä oletus CSS-tyylejä',
      'add_css_description' => 'Lisää automaattisesti otsake tyyli',
      'add_css_empty_option' => 'Ei tyylejä',
      'add_css_option_rbbox' => 'Laatikko (oikealla alhaalla)',
      'add_css_option_topline' => 'Kaistale (ylhäällä)',
      'add_css_option_topline_container' => 'Kaistale (päällä) Bootstrap container-luokan sisällä',
      'accept_all_cookies_btn' => 'Salli kaikki evästeet',
      'accept_all_cookies_btn_description' => 'Napsauttamalla tätä nappulaa, kaikki keksit hyväksytään automaattisesti, ja otsake häviää.',
      'import' => 'Tuo asetukset',
      'import_confirm' => 'Haluatko varmasti tuoda asetukset? Vanhat asetukset poistetaan!',
      'import_default' => 'Tuo oletusasetukset',
      'import_default_confirm' => 'Haluatko varmasti tuoda oletusasetukset mallista: ',
      'import_path' => 'Polku sasetustiedostoosi',
      'import_path_description' => 'Valitse asetustiedosto tai jätä tyhjäksi oletustiedostoa varten: ',
      'import_path_media' => 'Valitse tuotava tiedosto Mediasta',
      'import_path_media_description' => 'Tällä tiedostolla on läsnäoleva käsin syötetty polku alla.',
      'export' => 'Vie asetukset',
      'cookies_lifetime_days' => 'Evästeiden elinaika (päivissä)',
      'cookies_lifetime_days_comment' => 'Evästeiden elinaika selaimessa',
      'save_settings' => 'Tallenna asetukset',
      'scripts' => 'Skriptit',
      'scripts_title' => 'Otsikko (vaihtoehtoinen)',
      'scripts_title_description' => 'Käytetään vain kuvaukseen',
      'scripts_prompt' => 'Lisää skripti',
      'scripts_code' => 'Oma JS-koodi',
      'scripts_code_description' => 'Tämä koodi sisällytetään, mikäli ryhmä on pakollinen tai käyttäjä sallii sen käytön. Ole hyvä ja käytä "<script></script>" tagiä JS-koodille.',
      'scripts_file' => 'Suorita JS-tiedosto',
      'scripts_file_description' => "Suorita tämä tiedosto.",
      'scripts_run_production' => 'Aja vain tuotantoympäristössä',
      'scripts_run_production_description' => "Suorita JS-koodi ja tiedosto vain julkaistussa ympäristössä.",
      'scripts_disable' => 'Pois käytöstä',
      'scripts_disable_description' => 'Älä suorita tätä skriptiä.',
      'scripts_run_pages' => 'Suorita vain valituilla sivuilla',
      'scripts_run_pages_description' => 'Voit määritellä, millä sivuilla skripti suoritetaan.',
      'scripts_run_pages_list' => 'Suorita vain näillä sivuilla',
      'scripts_run_pages_list_prompt' => 'Lisää sivu',
      'page_url' => 'Sivun URL',
      'page_url_description' => 'Relatiivinen polki, esim.: /contact, /en/products, ...',
      'html_attributes' => 'HTML-tagin attribuutit',
      'show_modal' => 'Avaa ponnahdusikkuna',
      'show_modal_description' => 'Avaa ponnahdusikkuna evästeasetuksilla napsauttamalla tätä painiketta (toistaiseksi toimii vain, kun Bootstrap-tyyli on käytössä Asetukset-välilehdessä).',
      'disable_page_reload' => 'Sivun uudelleenlataus pois päältä',
      'disable_page_reload_description' => 'Älä lataa sivua uudelleen evästeasetusten jälkeen.',
      'empty_option' => 'Valitse vaihtoehto',
      'cancel' => 'Peruuta',
      'ui_style' => 'UI-tyyli',
      'ui_style_description' => 'Komponentit voi muotoilla HTML:n avulla',
      'ui_style_option_empty' => 'Puhdas HTML',
    ],
  ],

  'components' => [

    'cookies_bar' => [
      'name' => 'Evästepalkki',
      'description' => 'Palkki evästetiedoin',
    ],

    'cookies_manage' => [
      'name' => 'Hallitse evästeitä',
      'description' => 'Komponentti evästeiden käyttäjien hallintaan',
    ],
  ],

  'formwidgets' => [
    
    'importpreset' => [

      'file_name' => 'Tai kirjoita tuontitiedoston polku manuaalisesti',
      'file_name_comment' => 'Täydellinen polku tiedostoon.',
      'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.fi.yaml',
      'import_confirm' => 'Haluatko todella tuoda tietosi?',
      
      'flash' => [
        'import_successfull' => 'Tietojen tuonti onnistui',
        'import_error' => 'Tietojen tuonti epäonnistui. Lisätietoja järjestelmälokista.',
        'parse_error' => 'Tiedoston tietojen käsittely epäonnistui. Lisätietoja järjestelmälokista.',
        'file_error' => 'Tiedostoa ei löytynyt! Tarkista nimi ja polku.',
        'file_missing_error' => 'Tiedostoa ei valittu!',
      ],
    ],
    'exportpreset' => [

      'file_name' => 'Polku tiedostoon',
      'file_name_comment' => 'Täydellinen polku viedylle tiedostolle.',
      'file_name_default' => '/storage/app/media/small-gdpr-export.yaml',

      'flash' => [
        'export_successfull' => 'Tiedot tuotiin onnistuneesti',
        'export_error' => 'Viennissä tapahtui virhe. Lisätietoja järjestelmälokista.',
        'parse_error' => 'Asetustietojen käsittely epäonnistui. Lisätietoja järjestelmälokista.',
        'file_error' => 'Tiedostoon ei voitu kirjoittaa! Tarkista nimi ja polku.',
      ],
    ],
  ],
];