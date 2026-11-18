<?php

return [
    'page' => [
        'title' => 'Inventario de información personal',
        'navigation_label' => 'Información personal',
    ],

    'fields' => [
        'column' => 'Columna',
        'category' => 'Categoría',
        'purpose' => 'Finalidad',
        'flags' => 'Indicadores',
        'retention' => 'Retención',
        'anonymize' => 'Destrucción',
    ],

    'category' => [
        'personal' => 'Personal',
        'sensitive' => 'Sensible (art. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Fuera de Quebec (art. 17)',
        'profiling' => 'Elaboración de perfiles (art. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Enmascarar',
        'keep' => 'Conservar (guarda legal)',
    ],

    'missing' => 'No declarada',
    'empty' => 'No hay modelos registrados. Agregue sus modelos a quebec.models en config/quebec.php.',
];
