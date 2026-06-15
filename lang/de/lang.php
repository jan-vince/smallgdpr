<?php

return [

    'plugin' => [
        'name' => 'Small GDPR',
        'description' => 'Toolbox for GDPR',
        'category' => 'Small plugins',
    ],

    'permissions' => [
        'access_cookies_settings' => 'Zugriff auf die Cookie-Einstellungen',
    ],

    'settings' => [

        'cookies' => [
            'name' => 'Small GDPR',
            'description' => 'Alles über Cookies',
        ],

        'tabs' => [
            'cookies' => 'Cookies',
            'integration' => 'Integration',
            'cookies_list' => 'Cookies Gruppen',
            'cookies_bar' => 'Cookies Bar',
            'cookies_manage' => 'Cookies verwalten',
            'settings' => 'Einstellungen',
            'import' => 'Import',
            'export' => 'Export',
        ],

        'form_fields' => [
            // Integration tab (v2)
            'tag_type' => 'Tag-Manager / Analytics',
            'tag_type_description' => 'Welches Google-Tag soll das Plugin laden und nach dem Consent-Status steuern.',
            'tag_type_option_none' => 'Keines (Tags selbst laden)',
            'tag_type_option_ga4' => 'Google Analytics 4 (gtag.js)',
            'tag_type_option_gtm' => 'Google Tag Manager',
            'tag_id' => 'Tag-ID',
            'tag_id_description' => 'GA4-Mess-ID (G-XXXXXXX) oder GTM-Container-ID (GTM-XXXXXXX). Das Plugin rendert den Loader automatisch.',
            'production_only' => 'Tags nur in Produktion laden',
            'production_only_description' => 'Wenn aktiviert, wird der Tag-Loader (GA4 / GTM) nur in der Produktionsumgebung gerendert. Die Cookie-Leiste funktioniert überall, sodass die UI getestet werden kann.',
            'integration_custom_section' => 'Eigener Code',
            'integration_custom_section_description' => 'Optionaler Rohcode nach dem Plugin-Block. Für Tags, die das Plugin nicht direkt lädt (Meta, LinkedIn, Hotjar, …).',
            'custom_head_code' => 'Eigener <head>-Code',
            'custom_head_code_description' => 'Wird im <head> direkt nach dem Consent-Block des Plugins eingefügt. Eigene <script>/<link>-Tags verwenden.',
            'custom_body_code' => 'Eigener <body>-Code',
            'custom_body_code_description' => 'Wird am Anfang des <body> nach dem GTM-noscript, vor der Cookie-Leiste eingefügt.',
            'consent_event_name' => 'Name des Consent-dataLayer-Events',
            'consent_event_name_description' => 'Wird bei jeder Consent-Änderung / jedem Seitenaufruf in den dataLayer gepusht, damit Nicht-Google-Tags über einen Custom-Event-Trigger ausgelöst werden können.',
            'consent_types' => 'Google-Consent-Typen',
            'consent_types_description' => 'Welche Google-Consent-Mode-Signale diese Gruppe gewährt. Das Plugin erstellt das Consent-Update aus den aktiven Gruppen.',
            'scripts_position' => 'Position',
            'scripts_position_description' => 'Wo dieses Skript eingefügt wird.',
            'scripts_position_body' => 'Ende von <body>',
            'scripts_position_head' => '<head>',
            'buttons_section' => 'Schaltflächen',
            'buttons_section_description' => 'Beschriftungen und Sichtbarkeit der Schaltflächen von Leiste / Einstellungsdialog.',
            'btn_accept_label' => 'Beschriftung „Annehmen"',
            'btn_save_label' => 'Beschriftung „Speichern"',
            'btn_save_label_description' => 'Wird im Einstellungsdialog und auf der Verwaltungsseite verwendet.',
            'btn_reject_label' => 'Beschriftung „Ablehnen"',
            'btn_reject_show' => 'Schaltfläche „Ablehnen" anzeigen',
            'btn_reject_show_description' => 'Empfohlen: Ablehnen sollte so einfach sein wie Annehmen.',
            'btn_settings_label' => 'Beschriftung „Einstellungen"',
            'btn_settings_show' => 'Schaltfläche „Einstellungen" anzeigen',
            'btn_settings_show_description' => 'Öffnet den Dialog mit detaillierter Cookie-Auswahl.',

            'title' => 'Titel',
            'content' => 'Inhalt',
            'slug' => 'Code',
            'description' => 'Beschreibung',
            'cookies_list' => 'Cookies Gruppen',
            'cookies_list_prompt' => 'Gruppe hinzufügen',
            'cookie_required' => 'Erforderlich',
            'cookie_required_description' => 'Diese Cookies können vom Benutzer nicht deaktiviert werden',
            'cookie_default_enabled' => 'Standard aktiviert',
            'cookie_default_enabled_description' => 'Diese Cookies werden auch ohne ausdrückliche Zustimmung ausgeführt (sollten nur für anonyme Daten verwendet werden!).',
            'cookies_bar_content' => 'Inhalt',
            'import' => 'Importeinstellungen',
            'import_confirm' => 'Möchten Sie wirklich Einstellungen importieren? Alte Einstellungen gehen verloren!',
            'import_default' => 'Standardeinstellungen importieren',
            'import_default_confirm' => 'Möchten Sie die Standardeinstellungen wirklich aus der Vorlage importieren:',
            'import_path_description' => 'Wählen Sie Ihre Einstellungsdatei aus oder lassen Sie diese für eine voreingestellte Standarddatei leer:',
            'import_path_media' => 'Datei aus Medienbereich importieren',
            'import_path_media_description' => 'Diese Datei hat Vorrang vor dem unten eingegebenen manuell eingegebenen Pfad.',
            'export' => 'Exporteinstellungen',
            'cookies_lifetime_days' => 'Ablauf der Cookies (in Tagen)',
            'cookies_lifetime_days_comment' => 'Die Lebensdauer von Cookies im Browser',
            'save_settings' => 'Einstellungen speichern',
            'scripts' => 'Skripte',
            'scripts_title' => 'Titel (optional)',
            'scripts_title_description' => 'Wird nur zur Beschreibung verwendet',
            'scripts_prompt' => 'Skript hinzufügen',
            'scripts_code' => 'Benutzerdefinierter JS-Code',
            'scripts_code_description' => 'Dieser Code wird eingefügt, wenn der Benutzer eine Gruppe benötigt oder zulässt. Bitte verwenden Sie "<script> </ script>" -Tags für JS-Code.',
            'scripts_file' => 'Führen Sie die JS-Datei aus',
            'scripts_file_description' => "Führen Sie diese Datei aus.",
            'scripts_run_production' => 'Nur in Produktion laufen lassen',
            'scripts_run_production_description' => "Führen Sie JS-Code und -Dateien nur in der Produktionsumgebung aus.",
            'scripts_disable' => 'Deaktivieren',
            'scripts_disable_description' => 'Führen Sie diese Skripte nicht aus.',
            'scripts_run_pages' => 'Nur auf bestimmten Seiten ausführen',
            'scripts_run_pages_description' => 'Sie können eine oder mehrere Seiten angeben, auf denen dieses Skript ausgeführt wird.',
            'scripts_run_pages_list' => 'Nur auf diesen Seiten ausführen',
            'scripts_run_pages_list_prompt' => 'Seite hinzufügen',
            'page_url' => 'Seiten-URL',
            'page_url_description' => 'Relativer Pfad, z.B.: /contact, /en/products, ...',
        ],
    ],

    'components' => [
        'cookies_config' => [
          'name' => 'Cookies-Konfiguration (head)',
          'description' => 'Consent-Mode-Init + Tag-Loader. In den <head> einfügen, möglichst weit oben.',
        ],


        'cookies_bar' => [
            'name' => 'Cookies Bar',
            'description' => 'Bar mit Informationen zur Verwendung von Cookies',
        ],

        'cookies_manage' => [
            'name' => 'Cookies verwalten',
            'description' => 'Komponent zur Benutzerverwaltung von Cookies',
        ],
    ],

    'formwidgets' => [

        'importpreset' => [

            'file_name' => 'Oder geben Sie Ihren Importdateipfad manuell ein.',
            'file_name_comment' => 'Vollständiger Pfad zur Datei.',
            'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.en.yaml',
            'import_confirm' => 'Möchten Sie Ihre Daten wirklich importieren?',

            'flash' => [
                'import_successfull' => 'Daten wurden erfolgreich importiert',
                'import_error' => 'Daten konnten nicht importiert werden. Weitere Informationen im Systemprotokoll.',
                'parse_error' => 'Daten aus Datei konnten nicht verarbeitet werden. Weitere Informationen im Systemprotokoll.',
                'file_error' => 'Konnte Datei nicht finden! Überprüfen Sie den Namen und den Pfad.',
                'file_missing_error' => 'Es wurde keine Datei ausgewählt!',
            ],
        ],

        'exportpreset' => [

            'file_name' => 'Pfad zur Datei',
            'file_name_comment' => 'Vollständiger Pfad zur exportierten Datei.',
            'file_name_default' => '/storage/app/media/small-gdpr-export.yaml',

            'flash' => [
                'export_successfull' => 'Daten wurden erfolgreich importiert',
                'export_error' => 'Beim Exportieren ist ein Fehler aufgetreten. Weitere Infos im Systemprotokoll.',
                'parse_error' => 'Einstellungsdaten konnten nicht verarbeitet werden. Weitere Informationen im Systemprotokoll.',
                'file_error' => 'Konnte nicht in Datei schreiben! Überprüfen Sie den Namen und den Pfad.',
            ],
        ],
    ],
];