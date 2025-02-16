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


//common words used in whole website
// usage:
// {{ Dictionary()['NewProducts'][app()->getLocale()] }}
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
            'RU' => 'Язык',
            'AR' => 'لغة',
        ],
        'AboutUs' => [
            'FA' => 'درباره ما',
            'EN' => 'About Us',
            'RU' => 'о нас',
            'AR' => 'معلومات عنا',
        ],
        'Products' => [
            'FA' => 'محصولات',
            'EN' => 'Products',
            'RU' => 'Продукты',
            'AR' => 'منتجات',
        ],
        'ViewProduct' => [
            'FA' => 'مشاهده محصول',
            'EN' => 'View Product',
            'RU' => 'Посмотреть продукт',
            'AR' => 'عرض المنتج',
        ],
        'ProductCataloges' => [
            'FA' => 'کاتالوگ محصولات',
            'EN' => 'Product Catalogs',
            'RU' => 'каталог продукции',
            'AR' => 'كتالوجات المنتجات',
        ],
        'ViewCatalog' => [
            'FA' => 'مشاهده کاتالوگ',
            'EN' => 'View Catalog',
            'RU' => 'Посмотреть каталог',
            'AR' => 'اعرض الكتالوج',
        ],
        'ProductIntro' => [
            'FA' => 'معرفی محصول',
            'EN' => 'Product Introduction',
            'RU' => 'премьера продукта',
            'AR' => 'مقدمة المنتج',
        ],
        'ProductNutrition' => [
            'FA' => 'ارزش غذایی محصول',
            'EN' => 'Nutritional value of the product',
            'RU' => 'Пищевая ценность продукта',
            'AR' => 'القيمة الغذائية للمنتج',
        ],
        'Certificates' => [
            'FA' => 'گواهینامه ها و افتخارات',
            'EN' => 'Certificates',
            'RU' => 'Сертификаты',
            'AR' => 'الشهادات',
        ],
        'Gallery' => [
            'FA' => 'گالری تصاویر',
            'EN' => 'Photo Gallery',
            'RU' => 'Фотогалерея',
            'AR' => 'معرض الصور',
        ],
        'Events' => [
            'FA' => 'رویدادها',
            'EN' => 'Events',
            'RU' => 'События',
            'AR' => 'الأحداث',
        ],

        'FollowUs' => [
            'FA' => 'ما را دنبال کنید',
            'EN' => 'Follow Us',
            'RU' => 'Подписывайтесь на нас',
            'AR' => 'تابعنا',
        ],

        'AllRightsReserved' => [
            'FA' => 'تمامی حقوق محفوظ است، طراحی و اجرا واحد انفورماتیک شرکت بستنی اطمینان.',
            'EN' => 'All rights reserved, design and developed by IT department of Etminan Ice Cream Company',
            'RU' => 'Все права защищены, дизайн и разработка отдела ИТ компании Etminan Ice Cream Company.',
            'AR' => 'جميع الحقوق محفوظة ، تصميم وتطوير قسم تقنية المعلومات بشركة Etminan Ice Cream',
        ],

        'Address' => [
            'FA' => 'آذربایجان شرقی، شهرک صنعتی شهید سلیمی',
            'EN' => 'East Azerbaijan, Shahid Salimi Industrial Town',
            'RU' => 'Восточный Азербайджан, Промышленный город Шахид Салими',
            'AR' => 'أذربيجان الشرقية ، مدينة الشهيد سليمي الصناعية',
        ],
        'RandomImgs' => [
            'FA' => 'تصاویر تصادفی',
            'EN' => 'Random Images',
            'RU' => 'Случайные изображения',
            'AR' => 'صور عشوائية',
        ],
        'RelatedProducts' => [
            'FA' => 'محصولات مرتبط',
            'EN' => 'Related Products',
            'RU' => 'сопутствующие товары',
            'AR' => 'منتجات ذات صله',
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
