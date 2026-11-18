<?php

return [
    'page' => [
        'title' => 'Inventaris van persoonlijke informatie',
        'navigation_label' => 'Persoonlijke informatie',
    ],

    'fields' => [
        'column' => 'Kolom',
        'category' => 'Categorie',
        'purpose' => 'Doel',
        'flags' => 'Kenmerken',
        'retention' => 'Bewaring',
        'anonymize' => 'Vernietiging',
    ],

    'category' => [
        'personal' => 'Persoonlijk',
        'sensitive' => 'Gevoelig (art. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Buiten Quebec (art. 17)',
        'profiling' => 'Profilering (art. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Leegmaken',
        'hash' => 'Hash',
        'mask' => 'Maskeren',
        'keep' => 'Behouden (wettelijke bewaring)',
    ],

    'missing' => 'Niet opgegeven',
    'empty' => 'Geen models geregistreerd. Voeg je models toe aan quebec.models in config/quebec.php.',
];
