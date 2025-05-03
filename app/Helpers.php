<?php

use App\Models\LocaleContents;
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
 * @return string
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


//set dynamic title for input form in dashboard section

function inputformTitle($page)
{
    $title='';
    switch ($page) {
        case 'اسلایدر':
            $title= 'افزودن اسلایدر جدید (اندازه بهینه 1300 × 1950 حجم کمتر از 90 کیلوبایت)';
            break;

            case 'درباره ما':
                $title=  'درباره ما (اندازه بهینه 580 × 729 حجم کمتر از 20 کیلوبایت)';
                break;

            case 'نمونه محصولات':
                $title=  'نمونه محصولات (اندازه بهینه 414 × 270 حجم کمتر از 10 کیلوبایت)';
                break;
            case 'معرفی محصولات':
                $title=  'معرفی محصولات (اندازه بهینه 300 × 230 حجم کمتر از 6 کیلوبایت)';
                break;

            case 'مزایای محصول':
                $title=  'مزایای محصول (اندازه بهینه 300 × 230 حجم کمتر از 6 کیلوبایت)';
                break;

            case 'گالری تصاویر':
                $title=  'مزایای محصول (اندازه بهینه 379 × 560 حجم کمتر از 20 کیلوبایت)';
                break;

            case 'کاتالوگ':
                $title=  'کاتالوگ محصولات (فایل مورد نظر را از این قسمت آپلود کنید)';
                break;

            case 'برچسب ها':
                $title=  'نام برچسب های مورد استفاده در وبلاگ در این قسمت نوشته می شود.';
                break;
    }
    return $title;

}

//site info for use all over the website
// usage {{siteInfo()['email']}}
function siteInfo()
{
    $info=[
        'email'=>'azarpadtabriz@gmail.com',
        'mobile1'=>'09143181665',
        'mobile2'=>'09143090087',
        'mobile3'=>'09143065635',
        'phone' => '04134328877',
        'description'=>[
            'آذرپدتبریز',
            'آذر پد تبریز',
            'آذرپد تبریز',
            'پد سلولزی',
            'پدسلولزی',
            'تبریز',
        ],
    ];

    return $info;
}

//common words used in whole website
// usage:
// {{ Dictionary()['ProductCataloges'][app()->getLocale()] }}
function Dictionary()
{
    return [
        'ContactUs' => [
            'FA' => 'تماس با ما',
            'EN' => 'Contact Us',
            'AR' => 'اتصل بنا',
        ],

        'language' => [
            'FA' => 'زبان',
            'EN' => 'Language',
            'AR' => 'لغة',
        ],
        'AboutUs' => [
            'FA' => 'درباره ما',
            'EN' => 'About Us',
            'AR' => 'معلومات عنا',
        ],
        'ProductSamples' => [
            'FA' => 'نمونه محصولات',
            'EN' => 'Product Samples',
            'AR' => 'عينات المنتج',
        ],
        'Address' => [
            'FA' => 'شهرک سلیمی، بیست متری اصلی -کمر بندی جنوبی -کوچه تصفیه خانه-پلاک H33',
            'EN' => 'Plate H33, Water Treatment Plant Alley, South Beltway, 20 meter main road, Shahid Salimi Industrial Town',
            'AR' => 'بلدة السليمي تبعد 20 متر عن الشارع العام - الحزام الجنوبي - زقاق دار المصفاة - لوحة H33',
        ],
        'AllRightsReserved' => [
            'FA' => 'تمامی حقوق برای شرکت آذرپد تبریز محفوظ است.',
            'EN' => 'All rights reserved for Azarpad Tabriz Company',
            'AR' => 'جميع الحقوق محفوظة بشركة آذرپد تبریز',
        ],
        'FollowUs' => [
            'FA' => 'ما را دنبال کنید',
            'EN' => 'Follow Us',
            'AR' => 'تابعنا',
        ],

        'ProductIntroduction' => [
            'FA' => 'معرفی محصول',
            'EN' => 'Product Introduction',
            'AR' => 'مقدمة المنتج',
        ],
        'ProductAdvantage' => [
            'FA' => 'مزایای محصول',
            'EN' => 'Product Advantage',
            'AR' => 'فوائد المنتج',
        ],
        'Gallery' => [
            'FA' => 'گالری تصاویر',
            'EN' => 'Photo Gallery',
            'AR' => 'معرض الصور',
        ],
        'ProductCataloges' => [
            'FA' => 'کاتالوگ محصولات',
            'EN' => 'Product Catalogs',
            'AR' => 'كتالوجات المنتجات',
        ],
        'ViewCatalog' => [
            'FA' => 'مشاهده کاتالوگ',
            'EN' => 'View Catalog',
            'AR' => 'اعرض الكتالوج',
        ],
        'Home' => [
            'FA' => 'خانه',
            'EN' => 'Home',
            'AR' => 'الصفحة الرئيسية',
        ],
        'Blog' => [
            'FA' => 'وبلاگ',
            'EN' => 'Blog',
            'AR' => 'مدونة',
        ],
        'Applications' => [
            'FA' => 'کاربردها',
            'EN' => 'Applications',
            'AR' => 'التطبيقات',
        ],
        'Greenhouse' => [
            'FA' => 'گلخانه',
            'EN' => 'greenhouse',
            'AR' => 'دفيئة',
        ],
        'PoultryFarms' => [
            'FA' => 'مرغداریها',
            'EN' => 'Poultry Farms',
            'AR' => 'مزارع الدواجن',
        ],
        'PowerPlants' => [
            'FA' => 'نیروگاهها',
            'EN' => 'Power Plants',
            'AR' => 'محطات توليد الطاقة',
        ],




        'Name' => [
            'FA' => 'نام',
            'EN' => 'Name',
            'RU' => 'Имя',
            'AR' => 'اسم',
        ],
        'Email' => [
            'FA' => 'ایمیل',
            'EN' => 'Email',
            'RU' => 'е-мейл',
            'AR' => 'البريد الإلكتروني',
        ],
        'Subject' => [
            'FA' => 'موضوع',
            'EN' => 'Subject',
            'RU' => 'Тема',
            'AR' => 'موضوع',
        ],
        'Message' => [
            'FA' => 'متن پیام',
            'EN' => 'Message',
            'RU' => 'Сообщение',
            'AR' => 'رسالة',
        ],
        'Send' => [
            'FA' => 'ارسال',
            'EN' => 'Send',
            'RU' => 'представить',
            'AR' => 'إرسال',
        ],
        'SalesOffices' => [
            'FA' => 'شعب فروش',
            'EN' => 'Sales branches',
            'RU' => 'Филиалы продаж',
            'AR' => 'فروع المبيعات',
        ],
        'More' => [
            'FA' => 'بیشتر',
            'EN' => 'More',
            'RU' => 'Более',
            'AR' => 'أكثر',
        ],
        'Weight' => [
            'FA' => 'وزن',
            'EN' => 'Weight',
            'RU' => 'Масса',
            'AR' => 'أوزن',
        ],
        'MoreVideos' => [
            'FA' => 'ویدئوهای بیشتر',
            'EN' => 'More Videos',
            'RU' => 'Больше видео',
            'AR' => 'فيديوهات اكثر',
        ],

    ];
}
