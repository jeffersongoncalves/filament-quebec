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
        'outside_quebec' => 'Fora do Quebeque (art. 17)',
        'profiling' => 'Definição de perfis (art. 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (conservação legal)',
    ],

    'missing' => 'Não declarado',
    'empty' => 'Nenhum modelo registado. Adicione os seus modelos a quebec.models em config/quebec.php.',
];
