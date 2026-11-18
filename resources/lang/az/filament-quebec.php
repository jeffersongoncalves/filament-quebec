<?php

return [
    'page' => [
        'title' => 'Şəxsi məlumatların inventarı',
        'navigation_label' => 'Şəxsi məlumatlar',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kateqoriya',
        'purpose' => 'Məqsəd',
        'flags' => 'İşarələr',
        'retention' => 'Saxlama',
        'anonymize' => 'Məhv edilmə',
    ],

    'category' => [
        'personal' => 'Şəxsi',
        'sensitive' => 'Həssas (maddə 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Kvebekdən kənar (maddə 17)',
        'profiling' => 'Profilləşdirmə (maddə 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskala',
        'keep' => 'Saxla (hüquqi saxlama)',
    ],

    'missing' => 'Göstərilməyib',
    'empty' => 'Qeydiyyatda model yoxdur. Modellərinizi config/quebec.php faylında quebec.models-ə əlavə edin.',
];
