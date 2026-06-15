<?php

return [

    'plugin' => [
        'name' => 'Small GDPR',
        'description' => 'Toolbox for GDPR',
        'category' => 'Small plugins',
    ],

    'permissions' => [
        'access_cookies_settings' => 'Доступ к cookie настройкам',
    ],

    'settings' => [

        'cookies' => [
            'name' => 'Small GDPR',
            'description' => 'Все о cookies',
        ],

        'tabs' => [
            'cookies' => 'Cookies',
            'integration' => 'Интеграция',
            'cookies_list' => 'Cookies группы',
            'cookies_bar' => 'Cookies Панель',
            'cookies_manage' => 'Cookies управления',
            'settings' => 'Настройки',
            'import' => 'импорт',
            'export' => 'экспорт',
        ],

        'form_fields' => [
            // Integration tab (v2)
            'tag_type' => 'Менеджер тегов / аналитика',
            'tag_type_description' => 'Какой тег Google плагин должен загрузить и управлять им по состоянию согласия.',
            'tag_type_option_none' => 'Нет (загружать теги самостоятельно)',
            'tag_type_option_ga4' => 'Google Analytics 4 (gtag.js)',
            'tag_type_option_gtm' => 'Google Tag Manager',
            'tag_id' => 'ID тега',
            'tag_id_description' => 'Идентификатор GA4 (G-XXXXXXX) или ID контейнера GTM (GTM-XXXXXXX). Плагин формирует загрузчик автоматически.',
            'production_only' => 'Загружать теги только в продакшене',
            'production_only_description' => 'Если включено, загрузчик тега (GA4 / GTM) формируется только в продакшен-окружении. Панель cookies работает везде, чтобы можно было тестировать интерфейс.',
            'integration_custom_section' => 'Пользовательский код',
            'integration_custom_section_description' => 'Необязательный код, вставляемый после блока плагина. Для тегов, которые плагин не загружает напрямую (Meta, LinkedIn, Hotjar, …).',
            'custom_head_code' => 'Свой код в <head>',
            'custom_head_code_description' => 'Вставляется в <head> сразу после блока согласия плагина. Используйте свои теги <script>/<link>.',
            'custom_body_code' => 'Свой код в <body>',
            'custom_body_code_description' => 'Вставляется в начало <body> после GTM noscript, перед панелью cookies.',
            'consent_event_name' => 'Имя события согласия в dataLayer',
            'consent_event_name_description' => 'Отправляется в dataLayer при каждом изменении согласия / загрузке страницы, чтобы не-Google теги срабатывали через триггер пользовательского события.',
            'consent_types' => 'Типы согласия Google',
            'consent_types_description' => 'Какие сигналы Google Consent Mode предоставляет эта группа. Плагин формирует обновление согласия из активных групп.',
            'scripts_position' => 'Позиция',
            'scripts_position_description' => 'Куда вставить этот скрипт.',
            'scripts_position_body' => 'Конец <body>',
            'scripts_position_head' => '<head>',
            'buttons_section' => 'Кнопки',
            'buttons_section_description' => 'Подписи и видимость кнопок панели / диалога настроек.',
            'btn_accept_label' => 'Текст кнопки «Принять»',
            'btn_save_label' => 'Текст кнопки «Сохранить»',
            'btn_save_label_description' => 'Используется в диалоге настроек и на странице управления.',
            'btn_reject_label' => 'Текст кнопки «Отклонить»',
            'btn_reject_show' => 'Показывать кнопку «Отклонить»',
            'btn_reject_show_description' => 'Рекомендуется: отклонить должно быть так же просто, как принять.',
            'btn_settings_label' => 'Текст кнопки «Настройки»',
            'btn_settings_show' => 'Показывать кнопку «Настройки»',
            'btn_settings_show_description' => 'Открывает диалог с детальным выбором cookies.',

            'title' => 'Титул',
            'content' => 'Содержание',
            'slug' => 'Код',
            'description' => 'Описание',
            'cookies_list' => 'Cookies группы',
            'cookies_list_prompt' => 'Добавить группу',
            'cookie_required' => 'Необходимые',
            'cookie_required_description' => 'Эти cookie не могут быть отключены пользователем.',
            'cookie_default_enabled' => 'По умолчанию активирован',
            'cookie_default_enabled_description' => 'Эти cookie также выполняются без явного согласия (должны использоваться только для анонимных данных!).',
            'cookies_bar_content' => 'Содержание',
            'import' => 'Настройки импорта',
            'import_confirm' => 'Вы уверены, что хотите импортировать настройки? Старые настройки будут потеряны!',
            'import_default' => 'Импортировать настройки по умолчанию',
            'import_default_confirm' => 'Вы уверены, что хотите импортировать настройки по умолчанию из шаблона:',
            'import_path_description' => 'Выберите файл настроек или оставьте поле пустым для стандартного файла с предустановками:',
            'import_path_media' => 'Импортировать файл из области мультимедиа',
            'import_path_media_description' => 'Этот файл имеет приоритет над путем, указанным ниже.',
            'export' => 'Настройки экспорта',
            'cookies_lifetime_days' => 'Срок действия cookie (в днях)',
            'cookies_lifetime_days_comment' => 'Срок действия cookie в браузере',
            'save_settings' => 'Сохранить настройки',
            'scripts' => 'Скрипты',
            'scripts_title' => 'Заголовок (необязательно)',
            'scripts_title_description' => 'Используется только для описания',
            'scripts_prompt' => 'Добавить скрипт',
            'scripts_code' => 'Пользовательский JS код',
            'scripts_code_description' => 'Этот код вставляется, когда пользователь требует или разрешает группу. Пожалуйста, используйте теги «<script> </ script>» для JS кода.',
            'scripts_file' => 'Запустите JS файл',
            'scripts_file_description' => "Запустите этот файл.",
            'scripts_run_production' => 'Только в производстве',
            'scripts_run_production_description' => "Запускайте только JS-код и файлы в продакшене.",
            'scripts_disable' => 'Деактивировать',
            'scripts_disable_description' => 'Этот код не запускать.',
            'scripts_run_pages' => 'Запускать только на определенных страницах',
            'scripts_run_pages_description' => 'Вы можете указать одну или несколько страниц, на которых будет выполняться этот код.',
            'scripts_run_pages_list' => 'Выполнять только на этих страницах',
            'scripts_run_pages_list_prompt' => 'Добавить страницу',
            'page_url' => 'URL страницы',
            'page_url_description' => 'Относительный путь, например: /contact, /en/products, ...',
        ],
    ],

    'components' => [
        'cookies_config' => [
          'name' => 'Конфигурация cookies (head)',
          'description' => 'Инициализация Consent Mode + загрузчик тега. Разместите в <head>, как можно выше.',
        ],


        'cookies_bar' => [
            'name' => 'Cookies Панель',
            'description' => 'Панель с информацией об использовании cookie',
        ],

        'cookies_manage' => [
            'name' => 'Управления cookie',
            'description' => 'Компонент для управления cookie',
        ],
    ],

    'formwidgets' => [

        'importpreset' => [

            'file_name' => 'Или введите путь к файлу импорта вручную.',
            'file_name_comment' => 'Полный путь к файлу.',
            'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.en.yaml',
            'import_confirm' => 'Вы уверены, что хотите импортировать свои данные?',

            'flash' => [
                'import_successfull' => 'Данные были успешно импортированы',
                'import_error' => 'Данные не могут быть импортированы. Дополнительная информация в системном журнале.',
                'parse_error' => 'Данные из файла не могут быть обработаны. Дополнительная информация в системном журнале.',
                'file_error' => 'Не удалось найти файл! Проверьте имя и путь.',
                'file_missing_error' => 'Файл не выбран!',
            ],
        ],

        'exportpreset' => [

            'file_name' => 'Путь к файлу',
            'file_name_comment' => 'Полный путь к экспортированному файлу.',
            'file_name_default' => '/storage/app/media/small-gdpr-export.yaml',

            'flash' => [
                'export_successfull' => 'Данные были успешно импортированы',
                'export_error' => 'Произошла ошибка при экспорте. Дополнительная информация в системном журнале.',
                'parse_error' => 'Данные настроек не могут быть обработаны. Дополнительная информация в системном журнале.',
                'file_error' => 'Не удалось записать в файл! Проверьте имя и путь.',
            ],
        ],
    ],
];