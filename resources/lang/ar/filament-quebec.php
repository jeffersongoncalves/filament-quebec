<?php

return [
    'page' => [
        'title' => 'جرد المعلومات الشخصية',
        'navigation_label' => 'المعلومات الشخصية',
    ],

    'fields' => [
        'column' => 'العمود',
        'category' => 'الفئة',
        'purpose' => 'الغرض',
        'flags' => 'العلامات',
        'retention' => 'الاحتفاظ',
        'anonymize' => 'الإتلاف',
    ],

    'category' => [
        'personal' => 'شخصية',
        'sensitive' => 'حساسة (المادة 12)',
    ],

    'flags' => [
        'outside_quebec' => 'خارج كيبيك (المادة 17)',
        'profiling' => 'التنميط (المادة 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'إفراغ',
        'hash' => 'تجزئة',
        'mask' => 'إخفاء',
        'keep' => 'الإبقاء (احتفاظ قانوني)',
    ],

    'missing' => 'غير محدد',
    'empty' => 'لا توجد نماذج مسجلة. أضف نماذجك إلى quebec.models في config/quebec.php.',
];
