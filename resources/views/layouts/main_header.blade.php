<head>
    <title>{{ SiteName() }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="favicon.ico">
    <meta name="theme-color" content="#2775FF">
    <meta name="keywords" content="themeforest, theme, html, template">
    <meta name="description" content="themeforest, theme, html, template">


    <link rel="stylesheet" id="brk-direction-bootstrap" @if (SiteLang()[app()->getLocale()]['rtl'])
    href="css/assets/bootstrap-rtl.css"
    @else href="css/assets/bootstrap.css" @endif>

    <link rel="stylesheet" id="brk-direction-offsets" @if (SiteLang()[app()->getLocale()]['rtl'])
    href="css/assets/offsets-rtl.css"
    @else href="css/assets/offsets.css" @endif>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" id="brk-skin-color" href="css/skins/brk-blue.css">
    <link id="brk-base-color" rel="stylesheet" href="css/skins/brk-base-color.css">

    <link id="brk-css-min" rel="stylesheet" @if (SiteLang()[app()->getLocale()]['rtl'])
    href="css/assets/styles-rtl.min.css"
    @else href="css/assets/styles.min.css" @endif>

    <link rel="stylesheet" href="vendor/revslider/css/settings.css">
</head>