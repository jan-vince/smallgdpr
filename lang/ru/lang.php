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
            'name' => 'Cookies',
            'description' => 'Все о cookies',
        ],

        'tabs' => [
            'cookies_list' => 'Cookies группы',
            'cookies_bar' => 'Cookies Панель',
            'cookies_manage' => 'Cookies управления',
            'settings' => 'Настройки',
            'import' => 'импорт',
            'export' => 'экспорт',
        ],

        'form_fields' => [
            'title' => 'Титул',
            'content' => 'Содержание',
            'slug' => 'Код',
            'url' => 'URL',
            'url_external' => 'Внешний URL',
            'url_external_description' => 'URL ведет на страницу за пределами этого веб-сайта (eg. https://www.google.com).',
            'description' => 'Описание',
            'purpose' => 'Цель',
            'purpose_description' => '',
            'cookies_list' => 'Cookies группы',
            'cookies_list_description' => 'например необходимые, статистические, ...',
            'cookies_list_prompt' => 'Добавить группу',
            'cookie_required' => 'Необходимые',
            'cookie_required_description' => 'Эти cookie не могут быть отключены пользователем.',
            'cookie_default_enabled' => 'По умолчанию активирован',
            'cookie_default_enabled_description' => 'Эти cookie также выполняются без явного согласия (должны использоваться только для анонимных данных!).',
            'cookies_manager' => 'Cookie управления',
            'cookies_bar_buttons' => 'Кнопки',
            'cookies_bar_buttons_prompt' => 'Добавить кнопку',
            'cookies_bar_content' => 'Содержание',
            'css_class' => 'CSS class',
            'add_css' => 'Используйте стандартные CSS стили',
            'add_css_description' => 'Вставляет стандартные CSS стили',
            'accept_all_cookies_btn' => 'Разрешить все cookies',
            'accept_all_cookies_btn_description' => 'Если вы нажмете на эту кнопку, все cookie будут автоматически приняты, и элемент исчезнет.',
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
            'html_attributes' => 'Атрибуты тега HTML',
            'show_modal' => 'Открыть модальное окно',
            'show_modal_description' => 'Откройте модальное окно с настройками cookie, нажав эту кнопку (в настоящее время работает только в том случае, если стиль Bootstrap загрузки включен на вкладке «Настройки»).',
            'empty_option' => 'Выберите опцию',
            'cancel' => 'Закрыть',
            'ui_style' => 'Стиль пользовательского интерфейса',
            'ui_style_description' => 'Компоненты могут форматировать HTML для определенных фреймворков.',
            'ui_style_option_empty' => 'Чистый HTML',
        ],
    ],

    'components' => [

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