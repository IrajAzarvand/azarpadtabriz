{{-- used for main website pages --}}
<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-blue.css" @if (SiteLang()[app()->getLocale()]['rtl']) dir="rtl" @else dir="ltr"
@endif>

@include('layouts.main_header')

<body class="brk-bordered-theme" data-border="30">

    <div class="brk-loader">
        <div class="brk-loader__loader"></div>
    </div>

    <style>
        .brk-button-shadow {
            -webkit-box-shadow: 0 5px 16px rgba(39, 117, 255, .5) !important;
            -moz-box-shadow: 0 5px 16px rgba(39, 117, 255, .5) !important;
            box-shadow: 0 5px 16px rgba(39, 117, 255, .5) !important;
            margin: 20px !important
        }

        @media (min-width: 992px) {
            .custom-tabbed-contents-mt {
                margin-top: -140px;
            }
        }
    </style>

    <div class="main-page">

        <section>
            @include('layouts.mobile_header')

            @include('layouts.pc_header')
        </section>


        @yield('contents')


        @include('main.footer')
    </div>

    @include('layouts.main_scripts')

</body>

</html>