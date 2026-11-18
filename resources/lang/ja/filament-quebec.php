<?php

return [
    'page' => [
        'title' => '個人情報一覧',
        'navigation_label' => '個人情報',
    ],

    'fields' => [
        'column' => '列',
        'category' => 'カテゴリ',
        'purpose' => '目的',
        'flags' => 'フラグ',
        'retention' => '保持期間',
        'anonymize' => '破棄',
    ],

    'category' => [
        'personal' => '個人',
        'sensitive' => 'センシティブ（第12条）',
    ],

    'flags' => [
        'outside_quebec' => 'ケベック州外（第17条）',
        'profiling' => 'プロファイリング（第8.1条）',
    ],

    'anonymize' => [
        'nullify' => '空にする',
        'hash' => 'ハッシュ',
        'mask' => 'マスク',
        'keep' => '保持（法定保存）',
    ],

    'missing' => '未申告',
    'empty' => 'モデルが登録されていません。config/quebec.php の quebec.models にモデルを追加してください。',
];
