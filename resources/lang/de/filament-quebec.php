<?php

return [
    'page' => [
        'title' => 'Verzeichnis personenbezogener Informationen',
        'navigation_label' => 'Personenbezogene Informationen',
    ],

    'fields' => [
        'column' => 'Spalte',
        'category' => 'Kategorie',
        'purpose' => 'Zweck',
        'flags' => 'Kennzeichen',
        'retention' => 'Aufbewahrung',
        'anonymize' => 'Vernichtung',
    ],

    'category' => [
        'personal' => 'Personenbezogen',
        'sensitive' => 'Sensibel (Art. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Außerhalb Quebecs (Art. 17)',
        'profiling' => 'Profiling (Art. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Leeren',
        'hash' => 'Hash',
        'mask' => 'Maskieren',
        'keep' => 'Behalten (gesetzliche Aufbewahrung)',
    ],

    'missing' => 'Nicht angegeben',
    'empty' => 'Keine Models registriert. Fügen Sie Ihre Models in config/quebec.php zu quebec.models hinzu.',
];
