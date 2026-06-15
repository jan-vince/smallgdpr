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
      'cookies' => 'Cookies',
      'integration' => 'Intégration',
      'cookies_list' => 'Groupes de cookies',
      'cookies_bar' => 'Barre de cookies',
      'cookies_manage' => 'Gérer les cookies',
      'settings' => 'Paramètres',
      'import' => 'Importer',
      'export' => 'Exporter',
    ],

    'form_fields' => [
      // Integration tab (v2)
      'tag_type' => 'Gestionnaire de balises / analytics',
      'tag_type_description' => 'Quelle balise Google le plugin doit charger et piloter selon le consentement.',
      'tag_type_option_none' => 'Aucune (charger les balises vous-même)',
      'tag_type_option_ga4' => 'Google Analytics 4 (gtag.js)',
      'tag_type_option_gtm' => 'Google Tag Manager',
      'tag_id' => 'ID de balise',
      'tag_id_description' => 'ID de mesure GA4 (G-XXXXXXX) ou ID de conteneur GTM (GTM-XXXXXXX). Le plugin génère le chargeur automatiquement.',
      'production_only' => 'Charger les balises uniquement en production',
      'production_only_description' => 'Si activé, le chargeur de balise (GA4 / GTM) n’est généré qu’en environnement de production. La barre de cookies fonctionne partout pour tester l’interface.',
      'integration_custom_section' => 'Code personnalisé',
      'integration_custom_section_description' => 'Code brut optionnel injecté après le bloc du plugin. Pour les balises que le plugin ne charge pas directement (Meta, LinkedIn, Hotjar, …).',
      'custom_head_code' => 'Code <head> personnalisé',
      'custom_head_code_description' => 'Inséré dans le <head> juste après le bloc de consentement du plugin. Incluez vos propres balises <script>/<link>.',
      'custom_body_code' => 'Code <body> personnalisé',
      'custom_body_code_description' => 'Inséré en haut du <body> après le noscript GTM, avant la barre de cookies.',
      'consent_event_name' => 'Nom de l’événement dataLayer de consentement',
      'consent_event_name_description' => 'Envoyé au dataLayer à chaque changement de consentement / chargement de page pour déclencher les balises non-Google via un déclencheur d’événement personnalisé.',
      'consent_types' => 'Types de consentement Google',
      'consent_types_description' => 'Quels signaux Google Consent Mode ce groupe accorde. Le plugin construit la mise à jour du consentement à partir des groupes actifs.',
      'scripts_position' => 'Position',
      'scripts_position_description' => 'Où injecter ce script.',
      'scripts_position_body' => 'Fin du <body>',
      'scripts_position_head' => '<head>',
      'buttons_section' => 'Boutons',
      'buttons_section_description' => 'Libellés et visibilité des boutons de la barre / du dialogue de paramètres.',
      'btn_accept_label' => 'Libellé du bouton Accepter',
      'btn_save_label' => 'Libellé du bouton Enregistrer',
      'btn_save_label_description' => 'Utilisé dans le dialogue de paramètres et sur la page de gestion.',
      'btn_reject_label' => 'Libellé du bouton Refuser',
      'btn_reject_show' => 'Afficher le bouton Refuser',
      'btn_reject_show_description' => 'Recommandé : refuser doit être aussi simple qu’accepter.',
      'btn_settings_label' => 'Libellé du bouton Paramètres',
      'btn_settings_show' => 'Afficher le bouton Paramètres',
      'btn_settings_show_description' => 'Ouvre le dialogue avec le choix détaillé des cookies.',

      'title' => 'Titre',
      'content' => 'Contenu',
      'slug' => 'Code',
      'description' => 'Description',
      'cookies_list' => 'Groupes de cookies',
      'cookies_list_prompt' => 'Ajouter un groupe',
      'cookie_required' => 'Requis',
      'cookie_required_description' => 'Ces cookies ne peuvent pas être désactivés par l’utilisateur',
      'cookie_default_enabled' => 'Activé par défaut',
      'cookie_default_enabled_description' => 'Ces cookies seront exécutés même sans consentement explicite (devraient être utilisés uniquement pour des données anonymes !).',
      'cookie_default_modal_checked' => 'Coché par défaut (dans la fenêtre modale)',
      'cookie_default_modal_checked_description' => 'Ces cookies seront pré-cochés dans la fenêtre modale, les scripts ne sont pas lancés.',
      'cookies_bar_content' => 'Contenu',
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
      'disable_page_reload' => 'Désactiver le rechargement de la page',
      'disable_page_reload_description' => 'Ne pas recharger la page après que les cookies aient été définis.',
      'set_cookies_with_locale' => 'Définir les cookies pour chaque langue',
      'set_cookies_with_locale_comment' => 'Si défini, le consentement pour les cookies sera requis pour chaque langue séparément (utile si vous n’avez pas le même code de groupe de cookies pour toutes les langues ; nécessite le plugin Rainlab Translate).',
      ],
      ],
      
      'components' => [
        'cookies_config' => [
          'name' => 'Configuration cookies (head)',
          'description' => 'Initialisation du Consent Mode + chargeur de balise. À placer dans le <head>, le plus haut possible.',
        ],

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


