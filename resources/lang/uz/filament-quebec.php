<?php

return [
    'page' => [
        'title' => 'Shaxsiy axborot inventari',
        'navigation_label' => 'Shaxsiy axborot',
    ],

    'fields' => [
        'column' => 'Ustun',
        'category' => 'Toifa',
        'purpose' => 'Maqsad',
        'flags' => 'Belgilar',
        'retention' => 'Saqlash',
        'anonymize' => 'Yo\'q qilish',
    ],

    'category' => [
        'personal' => 'Shaxsiy',
        'sensitive' => 'Nozik (12-modda)',
    ],

    'flags' => [
        'outside_quebec' => 'Kvebekdan tashqari (17-modda)',
        'profiling' => 'Profillash (8.1-modda)',
    ],

    'anonymize' => [
        'nullify' => 'Bo\'shatish',
        'hash' => 'Xesh',
        'mask' => 'Niqoblash',
        'keep' => 'Saqlab qolish (qonuniy saqlash)',
    ],

    'missing' => 'Ko\'rsatilmagan',
    'empty' => 'Ro\'yxatdan o\'tgan model yo\'q. Modellaringizni config/quebec.php faylidagi quebec.models ga qo\'shing.',
];
