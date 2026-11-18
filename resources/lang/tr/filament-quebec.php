<?php

return [
    'page' => [
        'title' => 'Kişisel bilgi envanteri',
        'navigation_label' => 'Kişisel bilgiler',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kategori',
        'purpose' => 'Amaç',
        'flags' => 'İşaretler',
        'retention' => 'Saklama',
        'anonymize' => 'İmha',
    ],

    'category' => [
        'personal' => 'Kişisel',
        'sensitive' => 'Hassas (md. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Quebec dışı (md. 17)',
        'profiling' => 'Profilleme (md. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskele',
        'keep' => 'Koru (yasal saklama)',
    ],

    'missing' => 'Belirtilmemiş',
    'empty' => 'Kayıtlı model yok. Modellerinizi config/quebec.php içindeki quebec.models alanına ekleyin.',
];
