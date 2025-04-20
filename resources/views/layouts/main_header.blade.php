<head>
    <title>{{ SiteName() }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('favicon.ico')}}">
    <meta name="theme-color" content="#2775FF">

    <meta name="keywords" content="@foreach(siteInfo()['description'] as $list) {{$list}},  @endforeach">
    <meta name="description" content="@foreach(siteInfo()['description'] as $list) {{$list}},  @endforeach">


    <link rel="stylesheet" id="brk-direction-bootstrap" @if (SiteLang()[app()->getLocale()]['rtl'])
    href="{{asset('css/assets/bootstrap-rtl.css')}}"
    @else href="{{asset('css/assets/bootstrap.css')}}" @endif>

    <link rel="stylesheet" id="brk-direction-offsets" @if (SiteLang()[app()->getLocale()]['rtl'])
    href="{{asset('css/assets/offsets-rtl.css')}}"
    @else href="{{asset('css/assets/offsets.css')}}" @endif>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" id="brk-skin-color" href="{{asset('css/skins/brk-blue.css')}}">
    <link id="brk-base-color" rel="stylesheet" href="{{asset('css/skins/brk-base-color.css')}}">

    <link id="brk-css-min" rel="stylesheet" @if (SiteLang()[app()->getLocale()]['rtl'])
    href="{{asset('css/assets/styles-rtl.min.css')}}"
    @else href="{{asset('css/assets/styles.min.css')}}" @endif>

    <link rel="stylesheet" href="{{asset('vendor/revslider/css/settings.css')}}">
    <style>
        #rev_slider_12_1_wrapper .tp-loader.spinner2 {
            background-color: #0071fc !important;
        }
    </style>

    <script>
        function setREVStartSize(e) {
        try {
            e.c = jQuery(e.c);
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    };
    </script>
</head>
