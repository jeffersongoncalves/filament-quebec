<?php

return [
    'page' => [
        'title' => 'Inwentarz informacji osobowych',
        'navigation_label' => 'Informacje osobowe',
    ],

    'fields' => [
        'column' => 'Kolumna',
        'category' => 'Kategoria',
        'purpose' => 'Cel',
        'flags' => 'Oznaczenia',
        'retention' => 'Retencja',
        'anonymize' => 'Zniszczenie',
    ],

    'category' => [
        'personal' => 'Osobowe',
        'sensitive' => 'Wrażliwe (art. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Poza Quebekiem (art. 17)',
        'profiling' => 'Profilowanie (art. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Wyczyść',
        'hash' => 'Hash',
        'mask' => 'Maskuj',
        'keep' => 'Zachowaj (obowiązek prawny)',
    ],

    'missing' => 'Nie zadeklarowano',
    'empty' => 'Brak zarejestrowanych modeli. Dodaj swoje modele do quebec.models w config/quebec.php.',
];
