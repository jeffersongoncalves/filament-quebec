<?php

return [
    'page' => [
        'title' => '个人信息清单',
        'navigation_label' => '个人信息',
    ],

    'fields' => [
        'column' => '列',
        'category' => '类别',
        'purpose' => '目的',
        'flags' => '标记',
        'retention' => '保留期限',
        'anonymize' => '销毁',
    ],

    'category' => [
        'personal' => '个人',
        'sensitive' => '敏感（第12条）',
    ],

    'flags' => [
        'outside_quebec' => '魁北克省外（第17条）',
        'profiling' => '画像分析（第8.1条）',
    ],

    'anonymize' => [
        'nullify' => '置空',
        'hash' => '哈希',
        'mask' => '掩码',
        'keep' => '保留（法定留存）',
    ],

    'missing' => '未声明',
    'empty' => '未注册任何模型。请在 config/quebec.php 的 quebec.models 中添加您的模型。',
];
