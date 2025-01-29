<?php

function SiteLang()
{
    return [
        'FA' => [
            'name' => 'فارسی',
            'rtl' => 1,
        ],
        'EN' => [
            'name' => 'انگلیسی',
            'rtl' => 0,
        ],

        'AR' => [
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
    return "FA";
}

/**
 * set default locale to first item in locale file in config. => fa
 *
 * @return array
 */
function siteName()
{
    return 'آذر پد تبریز';
}
/**
 * set logo file route to use in whole website
 *
 * @return string
 */
function LogoPath()
{
    return asset('storage/Main_images/logo.png');

}