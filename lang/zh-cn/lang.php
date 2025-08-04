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
      'cookies_list' => 'Cookies 组',
      'cookies_bar' => 'Cookies 栏',
      'cookies_manage' => '管理 Cookies',
      'settings' => '设置',
      'import' => '导入',
      'export' => '导出',
    ],

    'form_fields' => [
      'title' => '标题',
      'content' => '内容',
      'slug' => '代码',
      'url' => 'URL',
      'url_description' => '如果您希望在页面重新加载后保持在当前页面，请设置为 #',
      'url_external' => '外部 URL',
      'url_external_description' => '该 URL 指向此网站外部的页面(例如：https://www.google.com)。',
      'description' => '描述',
      'purpose' => '目的',
      'purpose_description' => '',
      'cookies_list' => 'Cookies 组',
      'cookies_list_description' => '例如：必要、统计、...',
      'cookies_list_prompt' => '添加组',
      'cookie_required' => '必需',
      'cookie_required_description' => '此 Cookies 不能被用户禁用',
      'cookie_default_enabled' => '默认启用',
      'cookie_default_enabled_description' => '即使没有明确的同意，此 Cookies 也将被执行（仅应用于匿名数据！）',
      'cookie_default_modal_checked' => '默认选中（在模态窗口中）',
      'cookie_default_modal_checked_description' => '此 Cookies 将在模态窗口中预先选中，不会执行脚本',
      'cookies_manager' => '管理 Cookies',
      'cookies_bar_buttons' => '按钮',
      'cookies_bar_buttons_prompt' => '添加按钮',
      'cookies_bar_content' => '内容',
      'css_class' => 'CSS 类',
      'add_css' => '使用默认的 CSS 样式',
      'add_css_description' => '自动插入默认的栏样式',
      'add_css_empty_option' => '无样式',
      'add_css_option_rbbox' => '盒子（右下角）',
      'add_css_option_topline' => '条（在顶部）',
      'add_css_option_topline_container' => '在 Bootstrap 容器中的条（在顶部）',
      'accept_all_cookies_btn' => '允许所有 Cookies',
      'accept_all_cookies_btn_description' => '通过点击此按钮，将自动接受所有 Cookies，栏将消失',
      'accept_all_cookies_btn_script' => '点击此按钮后要运行的脚本（不要使用 <script> 标签）',
      'accept_all_cookies_btn_script_description' => '您可以在按钮点击后添加自定义的 JavaScript 脚本',
      'disable_all_cookies_btn' => '禁用所有 Cookies',
      'disable_all_cookies_btn_description' => '通过点击此按钮，将自动禁用所有（非必需）Cookies，栏将消失',
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
      'html_attributes' => 'HTML 标签属性',
      'show_modal' => '打开模态窗口',
      'show_modal_description' => '通过点击此按钮打开带有 Cookie 设置的模态窗口（目前仅在“设置”选项卡上启用 Bootstrap 样式时有效）',
      'disable_page_reload' => '禁用页面重新加载',
      'disable_page_reload_description' => '设置 Cookies 后不重新加载页面',
      'empty_option' => '选择一个选项',
      'cancel' => '取消',
      'ui_style' => 'UI 样式',
      'ui_style_description' => '组件可以为特定框架格式化 HTML',
      'ui_style_option_empty' => '纯 HTML',
      'set_cookies_with_locale' => '为每个语言设置 Cookies',
      'set_cookies_with_locale_comment' => '如果已设置，每种语言将单独需要 Cookies 同意（如果您不为所有语言使用相同的 Cookies 组代码，则很有用；需要 Rainlab Translate 插件）',
    ],
  ],

  'components' => [

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
