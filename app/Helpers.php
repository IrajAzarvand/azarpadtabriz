<?php

function SiteLang()
{
    return [
        'fa' => [
            'name' => 'فارسی',
            'rtl' => 1,
        ],
        'en' => [
            'name' => 'انگلیسی',
            'rtl' => 0,
        ],

        'ar' => [
            'name' => 'عربی',
            'rtl' => 1,
        ],
    ];
}


/**
 * set default locale to first item in locale file in config. => fa
 *
 * @return string
 */
function DefaultLocale()
{
    return "fa";
}
