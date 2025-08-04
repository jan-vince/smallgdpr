<?php

return [

  'plugin' => [
    'name' => 'Small GDPR',
    'description' => 'Boîte à outils pour le GDPR',
    'category' => 'Small plugins',
  ],

  'permissions' => [
    'access_cookies_settings' => 'Permettre l’accès aux paramètres des cookies',
  ],

  'settings' => [

    'cookies' => [
      'name' => 'Small GDPR',
      'description' => 'Tout sur les cookies',
    ],

    'tabs' => [
      'cookies_list' => 'Groupes de cookies',
      'cookies_bar' => 'Barre de cookies',
      'cookies_manage' => 'Gérer les cookies',
      'settings' => 'Paramètres',
      'import' => 'Importer',
      'export' => 'Exporter',
    ],

    'form_fields' => [
      'title' => 'Titre',
      'content' => 'Contenu',
      'slug' => 'Code',
      'url' => 'URL',
      'url_description' => 'Mettre à # si vous souhaitez rester sur la page actuelle après le rechargement de la page.',
      'url_external' => 'URL externe',
      'url_external_description' => 'L’URL mène à une page hors de ce site web (par ex. https://www.google.com).',
      'description' => 'Description',
      'purpose' => 'But',
      'purpose_description' => '',
      'cookies_list' => 'Groupes de cookies',
      'cookies_list_description' => 'Par ex. Nécessaires, Statistiques, ...',
      'cookies_list_prompt' => 'Ajouter un groupe',
      'cookie_required' => 'Requis',
      'cookie_required_description' => 'Ces cookies ne peuvent pas être désactivés par l’utilisateur',
      'cookie_default_enabled' => 'Activé par défaut',
      'cookie_default_enabled_description' => 'Ces cookies seront exécutés même sans consentement explicite (devraient être utilisés uniquement pour des données anonymes !).',
      'cookie_default_modal_checked' => 'Coché par défaut (dans la fenêtre modale)',
      'cookie_default_modal_checked_description' => 'Ces cookies seront pré-cochés dans la fenêtre modale, les scripts ne sont pas lancés.',
      'cookies_manager' => 'Gérer les cookies',
      'cookies_bar_buttons' => 'Boutons',
      'cookies_bar_buttons_prompt' => 'Ajouter des boutons',
      'cookies_bar_content' => 'Contenu',
      'css_class' => 'Classe CSS',
      'add_css' => 'Utiliser les styles CSS par défaut',
      'add_css_description' => 'Insère automatiquement les styles par défaut de la barre',
      'add_css_empty_option' => 'Pas de styles',
      'add_css_option_rbbox' => 'Boîte (coin inférieur droit)',
      'add_css_option_topline' => 'Bandeau (en haut)',
      'add_css_option_topline_container' => 'Bandeau (en haut) dans un conteneur Bootstrap',
      'accept_all_cookies_btn' => 'Autoriser tous les cookies',
      'accept_all_cookies_btn_description' => 'En cliquant sur ce bouton, tous les cookies seront automatiquement acceptés et la barre disparaîtra.',
      'accept_all_cookies_btn_script' => 'Script à exécuter après le clic sur ce bouton (ne pas utiliser de balise <script>)',
      'accept_all_cookies_btn_script_description' => 'Vous pouvez ajouter votre propre script JavaScript à exécuter après le clic sur le bouton',
      'disable_all_cookies_btn' => 'Désactiver tous les cookies',
      'disable_all_cookies_btn_description' => 'En cliquant sur ce bouton, tous les cookies (non requis) seront automatiquement désactivés et la barre disparaîtra.',
      'import' => 'Importer les paramètres',
      'import_confirm' => 'Êtes-vous sûr de vouloir importer les paramètres ? Les anciens paramètres seront perdus !',
      'import_default' => 'Importer les paramètres par défaut',
      'import_default_confirm' => 'Êtes-vous sûr de vouloir importer les paramètres par défaut depuis le modèle : ',
      'import_path' => 'Chemin vers votre fichier de configuration',
      'import_path_description' => 'Sélectionnez votre fichier de paramètres ou laissez vide pour un fichier prédéfini par défaut : ',
      'import_path_media' => 'Sélectionner le fichier d’importation depuis les Méd
      ChatGPT
      ias',
      'import_path_media_description' => 'Ce fichier a la préséance sur le chemin entré manuellement ci-dessous.',
      'export' => 'Exporter les paramètres',
      'cookies_lifetime_days' => 'Expiration des cookies (en jours)',
      'cookies_lifetime_days_comment' => 'La durée de vie des cookies dans le navigateur',
      'save_settings' => 'Sauvegarder les paramètres',
      'scripts' => 'Scripts',
      'scripts_title' => 'Titre (facultatif)',
      'scripts_title_description' => 'Utilisé uniquement pour la description',
      'scripts_prompt' => 'Ajouter un script',
      'scripts_code' => 'Code JS personnalisé',
      'scripts_code_description' => 'Ce code sera inclus si le groupe est requis ou autorisé par l’utilisateur. Veuillez utiliser les balises "<script></script>" pour le code JS.',
      'scripts_file' => 'Exécuter un fichier JS',
      'scripts_file_description' => "Exécute ce fichier.",
      'scripts_run_production' => 'Exécuter uniquement en production',
      'scripts_run_production_description' => "Exécute le code JS et le fichier uniquement en environnement de production.",
      'scripts_disable' => 'Désactiver',
      'scripts_disable_description' => 'Ne pas exécuter ces scripts.',
      'scripts_run_pages' => 'Exécuter sur des pages spécifiques uniquement',
      'scripts_run_pages_description' => 'Vous pouvez spécifier une ou plusieurs pages où ce script sera exécuté.',
      'scripts_run_pages_list' => 'Exécuter uniquement sur ces pages',
      'scripts_run_pages_list_prompt' => 'Ajouter une page',
      'page_url' => 'URL de la page',
      'page_url_description' => 'Chemin relatif, par ex. : /contact, /en/products, ...',
      'html_attributes' => 'Attributs des balises HTML',
      'show_modal' => 'Ouvrir la fenêtre modale',
      'show_modal_description' => 'Ouvre la fenêtre modale avec les paramètres des cookies en cliquant sur ce bouton (fonctionne pour le moment uniquement lorsque le style Bootstrap est activé dans l’onglet Paramètres).',
      'disable_page_reload' => 'Désactiver le rechargement de la page',
      'disable_page_reload_description' => 'Ne pas recharger la page après que les cookies aient été définis.',
      'empty_option' => 'Sélectionner une option',
      'cancel' => 'Annuler',
      'ui_style' => 'Style de l’UI',
      'ui_style_description' => 'Les composants peuvent formater le HTML pour un framework spécifique',
      'ui_style_option_empty' => 'HTML pur',
      'set_cookies_with_locale' => 'Définir les cookies pour chaque langue',
      'set_cookies_with_locale_comment' => 'Si défini, le consentement pour les cookies sera requis pour chaque langue séparément (utile si vous n’avez pas le même code de groupe de cookies pour toutes les langues ; nécessite le plugin Rainlab Translate).',
      ],
      ],
      
      'components' => [
        'cookies_bar' => [
          'name' => 'Barre de cookies',
          'description' => 'Barre avec informations sur les cookies utilisés',
        ],
        
        'cookies_manage' => [
          'name' => 'Gérer les cookies',
          'description' => 'Composant pour la gestion des cookies par l’utilisateur',
        ],
      ],
      'formwidgets' => [
        
        'importpreset' => [
      
          'file_name' => 'Ou entrez manuellement le chemin de votre fichier d’importation',
          'file_name_comment' => 'Chemin complet vers le fichier.',
          'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.fr.yaml',
          'import_confirm' => 'Voulez-vous vraiment importer vos données ?',
          
          'flash' => [
            'import_successfull' => 'Les données ont été importées avec succès',
            'import_error' => 'Échec de l’importation des données. Plus d’informations dans le journal système.',
            'parse_error' => 'Échec du traitement des données à partir du fichier. Plus d’informations dans le journal système.',
            'file_error' => 'Fichier introuvable ! Vérifiez le nom et le chemin.',
            'file_missing_error' => 'Aucun fichier n’a été sélectionné !',
          ],
        ],
        'exportpreset' => [
      
          'file_name' => 'Chemin vers le fichier',
          'file_name_comment' => 'Chemin complet vers le fichier exporté.',
          'file_name_default' => '/storage/app/media/small-gdpr-export.yaml',
      
          'flash' => [
            'export_successfull' => 'Les données ont été exportées avec succès',
            'export_error' => 'Il y a eu une erreur lors de l’exportation. Plus d’infos dans le journal système.',
            'parse_error' => 'Échec du traitement des données de configuration. Plus d’informations dans le journal système.',
            'file_error' => 'Impossible d’écrire dans le fichier ! Vérifiez le nom et le chemin.',
          ],
        ],
      ],
];


