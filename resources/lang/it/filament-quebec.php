<?php

return [
    'page' => [
        'title' => 'Inventario delle informazioni personali',
        'navigation_label' => 'Informazioni personali',
    ],

    'fields' => [
        'column' => 'Colonna',
        'category' => 'Categoria',
        'purpose' => 'Finalità',
        'flags' => 'Indicatori',
        'retention' => 'Conservazione',
        'anonymize' => 'Distruzione',
    ],

    'category' => [
        'personal' => 'Personale',
        'sensitive' => 'Sensibile (art. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Fuori dal Québec (art. 17)',
        'profiling' => 'Profilazione (art. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Svuota',
        'hash' => 'Hash',
        'mask' => 'Maschera',
        'keep' => 'Conserva (obbligo legale)',
    ],

    'missing' => 'Non dichiarata',
    'empty' => 'Nessun modello registrato. Aggiungi i tuoi modelli a quebec.models in config/quebec.php.',
];
