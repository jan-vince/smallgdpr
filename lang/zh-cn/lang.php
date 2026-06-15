<?php

return [

  'plugin' => [
    'name' => '小型GDPR',
    'description' => 'GDPR工具箱',
    'category' => '小型插件',
  ],

  'permissions' => [
    'access_cookies_settings' => '允许访问 Cookie 设置',
  ],

  'settings' => [

    'cookies' => [
      'name' => 'Small GDPR',
      'description' => '关于 Cookies 的一切',
    ],

    'tabs' => [
      'cookies' => 'Cookies',
      'integration' => '集成',
      'cookies_list' => 'Cookies 组',
      'cookies_bar' => 'Cookies 栏',
      'cookies_manage' => '管理 Cookies',
      'settings' => '设置',
      'import' => '导入',
      'export' => '导出',
    ],

    'form_fields' => [
      // Integration tab (v2)
      'tag_type' => '代码管理器 / 分析',
      'tag_type_description' => '插件应加载哪个 Google 代码并根据同意状态进行控制。',
      'tag_type_option_none' => '无（自行加载代码）',
      'tag_type_option_ga4' => 'Google Analytics 4 (gtag.js)',
      'tag_type_option_gtm' => 'Google Tag Manager',
      'tag_id' => '代码 ID',
      'tag_id_description' => 'GA4 衡量 ID（G-XXXXXXX）或 GTM 容器 ID（GTM-XXXXXXX）。插件会自动生成加载器。',
      'production_only' => '仅在生产环境加载代码',
      'production_only_description' => '启用后，代码加载器（GA4 / GTM）仅在生产环境中生成。Cookie 栏在任何环境都可用，便于测试界面。',
      'integration_custom_section' => '自定义代码',
      'integration_custom_section_description' => '在插件代码块之后注入的可选原始代码。用于插件不直接加载的代码（Meta、LinkedIn、Hotjar 等）。',
      'custom_head_code' => '自定义 <head> 代码',
      'custom_head_code_description' => '插入到 <head> 中插件同意代码块之后。请包含您自己的 <script>/<link> 标签。',
      'custom_body_code' => '自定义 <body> 代码',
      'custom_body_code_description' => '插入到 <body> 顶部 GTM noscript 之后、Cookie 栏之前。',
      'consent_event_name' => '同意 dataLayer 事件名称',
      'consent_event_name_description' => '在每次同意更改/页面加载时推送到 dataLayer，以便通过自定义事件触发器触发非 Google 代码。',
      'consent_types' => 'Google 同意类型',
      'consent_types_description' => '此分组授予哪些 Google Consent Mode 信号。插件根据已激活的分组构建同意更新。',
      'scripts_position' => '位置',
      'scripts_position_description' => '此脚本注入的位置。',
      'scripts_position_body' => '<body> 末尾',
      'scripts_position_head' => '<head>',
      'buttons_section' => '按钮',
      'buttons_section_description' => '栏 / 设置对话框按钮的文字与显示。',
      'btn_accept_label' => '“接受”按钮文字',
      'btn_save_label' => '“保存”按钮文字',
      'btn_save_label_description' => '用于设置对话框和管理页面。',
      'btn_reject_label' => '“拒绝”按钮文字',
      'btn_reject_show' => '显示“拒绝”按钮',
      'btn_reject_show_description' => '建议：拒绝应与接受同样容易。',
      'btn_settings_label' => '“设置”按钮文字',
      'btn_settings_show' => '显示“设置”按钮',
      'btn_settings_show_description' => '打开包含详细 Cookie 选择的对话框。',

      'title' => '标题',
      'content' => '内容',
      'slug' => '代码',
      'description' => '描述',
      'cookies_list' => 'Cookies 组',
      'cookies_list_prompt' => '添加组',
      'cookie_required' => '必需',
      'cookie_required_description' => '此 Cookies 不能被用户禁用',
      'cookie_default_enabled' => '默认启用',
      'cookie_default_enabled_description' => '即使没有明确的同意，此 Cookies 也将被执行（仅应用于匿名数据！）',
      'cookie_default_modal_checked' => '默认选中（在模态窗口中）',
      'cookie_default_modal_checked_description' => '此 Cookies 将在模态窗口中预先选中，不会执行脚本',
      'cookies_bar_content' => '内容',
      'import' => '导入设置',
      'import_confirm' => '您确定要导入设置吗？旧设置将丢失！',
      'import_default' => '导入默认设置',
      'import_default_confirm' => '您确定要从模板导入默认设置吗：',
      'import_path' => '到您的配置文件的路径',
      'import_path_description' => '选择您的设置文件或留空以使用默认的预设文件：',
      'import_path_media' => '从媒体中选择导入文件',
      'import_path_media_description' => '此文件优先级高于下面手动输入的路径',
      'export' => '导出设置',
      'cookies_lifetime_days' => 'Cookies 过期时间（天）',
      'cookies_lifetime_days_comment' => '浏览器中 Cookies 的生命周期',
      'save_settings' => '保存设置',
      'scripts' => '脚本',
      'scripts_title' => '标题（可选）',
      'scripts_title_description' => '仅用于描述',
      'scripts_prompt' => '添加脚本',
      'scripts_code' => '自定义 JS 代码',
      'scripts_code_description' => '如果组是必需的或用户允许的，将包含此代码。请为 JS 代码使用“<script></script>”标签',
      'scripts_file' => '运行 JS 文件',
      'scripts_file_description' => "Execute this file.",
      'scripts_run_production' => '仅在生产环境中运行',
      'scripts_run_production_description' => "Execute JS code and file only in production environment.",
      'scripts_disable' => '禁用',
      'scripts_disable_description' => '不运行此脚本',
      'scripts_run_pages' => '仅在特定页面上运行',
      'scripts_run_pages_description' => '您可以指定此脚本将运行的一个或多个页面',
      'scripts_run_pages_list' => '仅在这些页面上运行',
      'scripts_run_pages_list_prompt' => '添加页面',
      'page_url' => '页面 URL',
      'page_url_description' => '相对路径，例如：/contact, /en/products, ...',
      'disable_page_reload' => '禁用页面重新加载',
      'disable_page_reload_description' => '设置 Cookies 后不重新加载页面',
      'set_cookies_with_locale' => '为每个语言设置 Cookies',
      'set_cookies_with_locale_comment' => '如果已设置，每种语言将单独需要 Cookies 同意（如果您不为所有语言使用相同的 Cookies 组代码，则很有用；需要 Rainlab Translate 插件）',
    ],
  ],

  'components' => [
    'cookies_config' => [
      'name' => 'Cookie 配置（head）',
      'description' => 'Consent Mode 初始化 + 代码加载器。请放在 <head> 中尽量靠前的位置。',
    ],


    'cookies_bar' => [
      'name' => 'Cookies 栏',
      'description' => '有关已使用 Cookies 的信息栏',
    ],

    'cookies_manage' => [
      'name' => '管理 Cookies',
      'description' => '用于用户管理 Cookies 的组件',
    ],
  ],

  'formwidgets' => [
    
    'importpreset' => [

      'file_name' => '或者手动输入您的导入文件路径',
      'file_name_comment' => '文件的完整路径',
      'file_name_default' => '/plugins/janvince/smallgdpr/assets/presets/cookiesbar.en.yaml',
      'import_confirm' => '您真的要导入数据吗？',
      
      'flash' => [
        'import_successfull' => '数据已成功导入',
        'import_error' => '导入数据失败。更多信息请查看系统日志',
        'parse_error' => '无法从文件中处理数据。更多信息请查看系统日志',
        'file_error' => '找不到文件！请检查文件名和路径',
        'file_missing_error' => '未选择文件！',
      ],
    ],
    'exportpreset' => [

      'file_name' => '文件路径',
      'file_name_comment' => '导出文件的完整路径',
      'file_name_default' => '/storage/app/media/small-gdpr-export.yaml',

      'flash' => [
        'export_successfull' => '数据已成功导入',
        'export_error' => '导出时发生错误。更多信息请查看系统日志',
        'parse_error' => '无法处理设置数据。更多信息请查看系统日志',
        'file_error' => '无法写入文件！请检查文件名和路径',
      ],
    ],
  ],
];
