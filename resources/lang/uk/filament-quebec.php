<?php

return [
    'page' => [
        'title' => 'Реєстр персональної інформації',
        'navigation_label' => 'Персональна інформація',
    ],

    'fields' => [
        'column' => 'Стовпець',
        'category' => 'Категорія',
        'purpose' => 'Мета',
        'flags' => 'Позначки',
        'retention' => 'Зберігання',
        'anonymize' => 'Знищення',
    ],

    'category' => [
        'personal' => 'Персональні',
        'sensitive' => 'Чутлива (ст. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'За межами Квебеку (ст. 17)',
        'profiling' => 'Профілювання (ст. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Очистити',
        'hash' => 'Хеш',
        'mask' => 'Маскувати',
        'keep' => 'Зберегти (обов\'язкове зберігання)',
    ],

    'missing' => 'Не вказано',
    'empty' => 'Моделі не зареєстровано. Додайте свої моделі до quebec.models у config/quebec.php.',
];
