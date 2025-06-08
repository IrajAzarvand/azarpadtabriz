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

            case 'وبلاگ':
                $title=  'وبلاگ (اندازه بهینه 400 × 650 حجم کمتر از 90 کیلوبایت)';
                break;

            case 'پیام ها':
                $title=  'مشاهده پیام های ارسال شده از طرف کاربران';
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
        'Recent' => [
            'FA' => 'موارد اخیر',
            'EN' => 'Recent',
            'AR' => 'مؤخرًا',
        ],
        'More' => [
            'FA' => 'بیشتر',
            'EN' => 'More',
            'AR' => 'أكثر',
        ],
        'Tags' => [
            'FA' => 'برچسب ها',
            'EN' => 'Tags',
            'AR' => 'العلامات',
        ],
        'NoImage' => [
            'FA' => 'بدون تصویر',
            'EN' => 'No Image',
            'AR' => 'لا توجد صورة',
        ],
        'Comments' => [
            'FA' => 'کامنت ها',
            'EN' => 'Comments',
            'AR' => 'تعليقات',
        ],
        'LeaveAComment' => [
            'FA' => 'کامنت بنویسید',
            'EN' => 'Leave a comment',
            'AR' => 'اترك تعليقا',
        ],
        'Name' => [
            'FA' => 'نام',
            'EN' => 'Name',
            'AR' => 'اسم',
        ],
        'Email' => [
            'FA' => 'ایمیل',
            'EN' => 'Email',
            'AR' => 'البريد الإلكتروني',
        ],

        'Subject' => [
            'FA' => 'موضوع',
            'EN' => 'Subject',
            'AR' => 'موضوع',
        ],
        'Message' => [
            'FA' => 'متن پیام',
            'EN' => 'Message',
            'AR' => 'رسالة',
        ],
        'Send' => [
            'FA' => 'ارسال',
            'EN' => 'Send',
            'RU' => 'представить',
            'AR' => 'إرسال',
        ],

        'AskForHelp' => [
            'FA' => 'ما برای کمک به شما آماده ایم',
            'EN' => 'We are ready to help you.',
            'AR' => 'نحن مستعدون لمساعدتك.',
        ],

        'ContactUsDetail' => [
            'FA' => 'برای دریافت مشاوره و راهنمایی در مورد محصولات و فروش با ما تماس بگیرید یا پیام ارسال فرمایید. ما در سریعترین زمان به شما پاسخ خواهیم داد.',
            'EN' => 'For advice and guidance on products and sales, please contact us or send us a message. We will respond to you as soon as possible.',
            'AR' => 'اتصل بنا أو أرسل لنا رسالة لتلقي النصائح والإرشادات حول المنتجات والمبيعات. سوف نقوم بالرد عليك في أقرب وقت ممكن.',
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



//Persian Date Converter
class persian_date
{

    var $persian_month_names = array(
        '01' => '&#1601;&#1585;&#1608;&#1585;&#1583;&#1740;&#1606;',
        '02' => '&#1575;&#1585;&#1583;&#1740;&#1576;&#1607;&#1588;&#1578;',
        '03' => '&#1582;&#1585;&#1583;&#1575;&#1583;',
        '04' => '&#1578;&#1740;&#1585;',
        '05' => '&#1605;&#1585;&#1583;&#1575;&#1583;',
        '06' => '&#1588;&#1607;&#1585;&#1740;&#1608;&#1585;',
        '07' => '&#1605;&#1607;&#1585;',
        '08' => '&#1570;&#1576;&#1575;&#1606;',
        '09' => '&#1570;&#1584;&#1585;',
        '10' => '&#1583;&#1740;',
        '11' => '&#1576;&#1607;&#1605;&#1606;',
        '12' => '&#1575;&#1587;&#1601;&#1606;&#1583;'
    );

    var $persian_day_names = array(
        '6' => '&#1588;&#1606;&#1576;&#1607;',
        '0' => '&#1740;&#1705;&#1588;&#1606;&#1576;&#1607;',
        '1' => '&#1583;&#1608;&#1588;&#1606;&#1576;&#1607;',
        '2' => '&#1587;&#1607; &#1588;&#1606;&#1576;&#1607;',
        '3' => '&#1670;&#1607;&#1575;&#1585;&#1588;&#1606;&#1576;&#1607;',
        '4' => '&#1662;&#1606;&#1580;&#1588;&#1606;&#1576;&#1607;',
        '5' => '&#1570;&#1583;&#1740;&#1606;&#1607;'
    );

    function div($a, $b)
    {
        return (int)($a / $b);
    }

    function gregorian_to_persian($g_y, $g_m, $g_d)
    {
        $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
        $gy = $g_y - 1600;
        $gm = $g_m - 1;
        $gd = $g_d - 1;
        $g_day_no = 365 * $gy + $this->div($gy + 3, 4) - $this->div($gy + 99, 100) + $this->div($gy + 399, 400);
        for ($i = 0; $i < $gm; ++$i)
            $g_day_no += $g_days_in_month[$i];
        if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))
            /* leap and after Feb */
            $g_day_no++;
        $g_day_no += $gd;
        $j_day_no = $g_day_no - 79;
        $j_np = $this->div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */
        $j_day_no = $j_day_no % 12053;
        $jy = 979 + 33 * $j_np + 4 * $this->div($j_day_no, 1461); /* 1461 = 365*4 + 4/4 */
        $j_day_no %= 1461;
        if ($j_day_no >= 366) {
            $jy += $this->div($j_day_no - 1, 365);
            $j_day_no = ($j_day_no - 1) % 365;
        }
        for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
            $j_day_no -= $j_days_in_month[$i];
        $jm = $i + 1;
        $jd = $j_day_no + 1;
        if (strlen($jm) == 1) $jm = '0' . $jm;
        if (strlen($jd) == 1) $jd = '0' . $jd;
        return array($jy, $jm, $jd);
    }

    function persian_to_gregorian($j_y, $j_m, $j_d)
    {
        $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
        $jy = $j_y - 979;
        $jm = $j_m - 1;
        $jd = $j_d - 1;
        $j_day_no = 365 * $jy + $this->div($jy, 33) * 8 + $this->div($jy % 33 + 3, 4);
        for ($i = 0; $i < $jm; ++$i)
            $j_day_no += $j_days_in_month[$i];
        $j_day_no += $jd;
        $g_day_no = $j_day_no + 79;
        $gy = 1600 + 400 * $this->div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
        $g_day_no = $g_day_no % 146097;
        $leap = true;
        if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */ {
            $g_day_no--;
            $gy += 100 * $this->div($g_day_no, 36524); /* 36524 = 365*100 + 100/4 - 100/100 */
            $g_day_no = $g_day_no % 36524;
            if ($g_day_no >= 365)
                $g_day_no++;
            else
                $leap = false;
        }
        $gy += 4 * $this->div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */
        $g_day_no %= 1461;
        if ($g_day_no >= 366) {
            $leap = false;
            $g_day_no--;
            $gy += $this->div($g_day_no, 365);
            $g_day_no = $g_day_no % 365;
        }
        for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++)
            $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap);
        $gm = $i + 1;
        $gd = $g_day_no + 1;
        if (strlen($gm) == 1) $gm = '0' . $gm;
        if (strlen($gd) == 1) $gd = '0' . $gd;
        return array($gy, $gm, $gd);
    }

    function to_date($g_date, $input)
    {
        $g_date = str_replace('-', '', $g_date);
        $g_date = str_replace('/', '', $g_date);

        $g_year = substr($g_date, 0, 4);
        $g_month = substr($g_date, 4, 2);
        $g_day = substr($g_date, 6, 2);
        $persian_date = $this->gregorian_to_persian($g_year, $g_month, $g_day);
        if ($input == 'Y') return $persian_date[0];
        if ($input == 'y') return substr($persian_date[0], -2);
        if ($input == 'M') return $this->persian_month_names[$persian_date[1]];
        if ($input == 'm') return $persian_date[1];
        if ($input == 'D') return $this->persian_day_names[date('w')];
        if ($input == 'd') return $persian_date[2];
        if ($input == 'j') {
            $persian_d = $persian_date[2];
            if ($persian_d[0] == '0') $persian_d = substr($persian_d, 1);
            return $persian_d;
        }
        if ($input == 'n') {
            $persian_n = $persian_date[1];
            if ($persian_n[0] == '0') $persian_n = substr($persian_n, 1);
            return $persian_n;
        }

        if ($input == 'Y/m/d') return $persian_date[0] .
            '/' . $persian_date[1] .
            '/' . $persian_date[2];
        if ($input == 'Ymd') return $persian_date[0] . $persian_date[1] . $persian_date[2];

        if ($input == 'y/m/d') return substr($persian_date[0], -2) .
            '/' . $persian_date[1] .
            '/' . $persian_date[2];
        if ($input == 'ymd') return substr($persian_date[0], -2) . $persian_date[1] . $persian_date[2];

        if ($input == 'Y-m-d') return $persian_date[0] .
            '-' . $persian_date[1] .
            '-' . $persian_date[2];
        if ($input == 'y-m-d') return substr($persian_date[0], -2) .
            '-' . $persian_date[1] .
            '-' . $persian_date[2];


        if ($input == 'compelete') {
            $persian_d = $persian_date[2];
            if ($persian_d[0] == '0') $persian_d = substr($persian_d, 1);
            return $this->persian_day_names[date('w')] .
                ' ' . $persian_d .
                ' ' . $this->persian_month_names[$persian_date[1]] .
                ' ' . $persian_date[0];
        }
    }

    function date($input)
    {
        return $this->to_date(date('Y') . date('m') . date('d'), $input);
    }

    function date_to($j_date)
    {
        $j_date = str_replace('/', '', $j_date);
        $j_date = str_replace('-', '', $j_date);
        $j_year = substr($j_date, 0, 4);
        $j_month = substr($j_date, 4, 2);
        $j_day = substr($j_date, 6, 2);
        $gregorian_date = $this->persian_to_gregorian($j_year, $j_month, $j_day);
        return $gregorian_date[0] .
            '-' . $gregorian_date[1] .
            '-' . $gregorian_date[2];
    }
}

function persian(): persian_date
{
    return new persian_date();
}
