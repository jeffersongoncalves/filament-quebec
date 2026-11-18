<?php

return [
    'page' => [
        'title' => 'Реестр персональной информации',
        'navigation_label' => 'Персональная информация',
    ],

    'fields' => [
        'column' => 'Столбец',
        'category' => 'Категория',
        'purpose' => 'Цель',
        'flags' => 'Отметки',
        'retention' => 'Хранение',
        'anonymize' => 'Уничтожение',
    ],

    'category' => [
        'personal' => 'Персональные',
        'sensitive' => 'Чувствительная (ст. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'За пределами Квебека (ст. 17)',
        'profiling' => 'Профилирование (ст. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Очистить',
        'hash' => 'Хеш',
        'mask' => 'Маскировать',
        'keep' => 'Сохранить (обязательное хранение)',
    ],

    'missing' => 'Не указано',
    'empty' => 'Модели не зарегистрированы. Добавьте свои модели в quebec.models в config/quebec.php.',
];
