<?php

return [
    'page' => [
        'title' => 'فهرست اطلاعات شخصی',
        'navigation_label' => 'اطلاعات شخصی',
    ],

    'fields' => [
        'column' => 'ستون',
        'category' => 'دسته',
        'purpose' => 'هدف',
        'flags' => 'نشانه‌ها',
        'retention' => 'نگهداری',
        'anonymize' => 'امحا',
    ],

    'category' => [
        'personal' => 'شخصی',
        'sensitive' => 'حساس (ماده 12)',
    ],

    'flags' => [
        'outside_quebec' => 'خارج از کبک (ماده 17)',
        'profiling' => 'پروفایل‌سازی (ماده 8.1)',
    ],

    'anonymize' => [
        'nullify' => 'خالی کردن',
        'hash' => 'هش',
        'mask' => 'پوشاندن',
        'keep' => 'نگه‌داشتن (نگهداری قانونی)',
    ],

    'missing' => 'اعلام نشده',
    'empty' => 'هیچ مدلی ثبت نشده است. مدل‌های خود را در config/quebec.php به quebec.models اضافه کنید.',
];
