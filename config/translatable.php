<?php

return [
    'locales' => [
        'az',
        'en',
        'ru'
    ],
    'locale_separator' => '-',
    'locale' => null,
    'use_fallback' => false,
    'use_property_fallback' => true,
    'fallback_locale' => 'en',
    'translation_model_namespace' => null,
    'translation_suffix' => 'Translation',
    'locale_key' => 'locale',
    'to_array_always_loads_translations' => true,
    'rule_factory' => [
        'format' => \Astrotomic\Translatable\Validation\RuleFactory::FORMAT_ARRAY,
        'prefix' => '%',
        'suffix' => '%',
    ],
];
