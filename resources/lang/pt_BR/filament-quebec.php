<?php

return [
    'page' => [
        'title' => 'Inventário de informações pessoais',
        'navigation_label' => 'Informações pessoais',
    ],

    'fields' => [
        'column' => 'Coluna',
        'category' => 'Categoria',
        'purpose' => 'Finalidade',
        'flags' => 'Sinalizações',
        'retention' => 'Retenção',
        'anonymize' => 'Destruição',
    ],

    'category' => [
        'personal' => 'Pessoal',
        'sensitive' => 'Sensível (art. 12)',
    ],

    'flags' => [
        'outside_quebec' => 'Fora do Quebec (art. 17)',
        'profiling' => 'Perfilamento (art. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (guarda legal)',
    ],

    'missing' => 'Não declarada',
    'empty' => 'Nenhum model registrado. Adicione seus models a quebec.models em config/quebec.php.',
];
