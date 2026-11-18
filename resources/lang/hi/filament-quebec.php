<?php

return [
    'page' => [
        'title' => 'व्यक्तिगत जानकारी सूची',
        'navigation_label' => 'व्यक्तिगत जानकारी',
    ],

    'fields' => [
        'column' => 'कॉलम',
        'category' => 'श्रेणी',
        'purpose' => 'उद्देश्य',
        'flags' => 'चिह्न',
        'retention' => 'प्रतिधारण',
        'anonymize' => 'विनाश',
    ],

    'category' => [
        'personal' => 'व्यक्तिगत',
        'sensitive' => 'संवेदनशील (धारा 12)',
    ],

    'flags' => [
        'outside_quebec' => 'क्यूबेक के बाहर (धारा 17)',
        'profiling' => 'प्रोफ़ाइलिंग (धारा 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'खाली करें',
        'hash' => 'हैश',
        'mask' => 'मास्क करें',
        'keep' => 'रखें (कानूनी प्रतिधारण)',
    ],

    'missing' => 'घोषित नहीं',
    'empty' => 'कोई मॉडल पंजीकृत नहीं है। config/quebec.php में quebec.models में अपने मॉडल जोड़ें।',
];
