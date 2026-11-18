<?php

return [
    'page' => [
        'title' => 'Inventaire des renseignements personnels',
        'navigation_label' => 'Renseignements personnels',
    ],

    'fields' => [
        'column' => 'Colonne',
        'category' => 'Catégorie',
        'purpose' => 'Finalité',
        'flags' => 'Indicateurs',
        'retention' => 'Conservation',
        'anonymize' => 'Destruction',
    ],

    'category' => [
        'personal' => 'Personnelle',
        'sensitive' => 'Sensible (art. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Hors Québec (art. 17)',
        'profiling' => 'Profilage (art. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Vider',
        'hash' => 'Hachage',
        'mask' => 'Masquer',
        'keep' => 'Conserver (obligation légale)',
    ],

    'missing' => 'Non déclarée',
    'empty' => 'Aucun modèle enregistré. Ajoutez vos modèles à quebec.models dans config/quebec.php.',
];
