<?php

return [
    'page' => [
        'title' => 'Personal information inventory',
        'navigation_label' => 'Personal information',
    ],

    'fields' => [
        'column' => 'Column',
        'category' => 'Category',
        'purpose' => 'Purpose',
        'flags' => 'Flags',
        'retention' => 'Retention',
        'anonymize' => 'Destruction',
    ],

    'category' => [
        'personal' => 'Personal',
        'sensitive' => 'Sensitive (s. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Outside Quebec (s. 17)',
        'profiling' => 'Profiling (s. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Nullify',
        'hash' => 'Hash',
        'mask' => 'Mask',
        'keep' => 'Keep (legal retention)',
    ],

    'missing' => 'Not declared',
    'empty' => 'No models registered. Add your models to quebec.models in config/quebec.php.',
];
