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
            'name' => 'Cookies',
            'description' => 'Alles über Cookies',
        ],

        'tabs' => [
            'cookies_list' => 'Cookies Gruppen',
            'cookies_bar' => 'Cookies Bar',
            'cookies_manage' => 'Cookies verwalten',
            'settings' => 'Einstellungen',
            'import' => 'Import',
            'export' => 'Export',
        ],

        'form_fields' => [
            'title' => 'Titel',
            'content' => 'Inhalt',
            'slug' => 'Code',
            'url' => 'URL',
            'url_external' => 'Externe URL',
            'url_external_description' => 'Die URL führt zu einer Seite außerhalb dieser Webseite (eg. https://www.google.com).',
            'description' => 'Beschreibung',
            'purpose' => 'Zweck',
            'purpose_description' => '',
            'cookies_list' => 'Cookies Gruppen',
            'cookies_list_description' => 'z.B. Notwendig, statistisch, ...',
            'cookies_list_prompt' => 'Gruppe hinzufügen',
            'cookie_required' => 'Erforderlich',
            'cookie_required_description' => 'Diese Cookies können vom Benutzer nicht deaktiviert werden',
            'cookie_default_enabled' => 'Standard aktiviert',
            'cookie_default_enabled_description' => 'Diese Cookies werden auch ohne ausdrückliche Zustimmung ausgeführt (sollten nur für anonyme Daten verwendet werden!).',
            'cookies_manager' => 'Cookies verwalten',
            'cookies_bar_buttons' => 'Knöpfe',
            'cookies_bar_buttons_prompt' => 'Knopf hinzufügen',
            'cookies_bar_content' => 'Inhalt',
            'css_class' => 'CSS class',
            'add_css' => 'Standard-CSS-Stile verwenden',
            'add_css_description' => 'Fügt Standard-CSS-Stile ein',
            'accept_all_cookies_btn' => 'Erlaube alle Cookies',
            'accept_all_cookies_btn_description' => 'Wenn Sie auf diese Schaltfläche klicken, werden alle Cookies automatisch akzeptiert und die Leiste verschwindet.',
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
            'html_attributes' => 'HTML-Tag-Attribute',
            'show_modal' => 'Modalfenster öffnen',
            'show_modal_description' => 'Öffnen Sie das modal Fenster mit den Cookie-Einstellungen, indem Sie auf diese Schaltfläche klicken (funktioniert derzeit nur, wenn der Bootstrap-Stil auf der Registerkarte Einstellungen aktiviert ist).',
            'empty_option' => 'Wähle eine Option',
            'cancel' => 'Schließen',
            'ui_style' => 'UI-Stil',
            'ui_style_description' => 'Komponenten können HTML für bestimmte Frameworks formatieren',
            'ui_style_option_empty' => 'Reines HTML',
        ],
    ],

    'components' => [

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