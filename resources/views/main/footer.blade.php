<footer class="brk-footer position-relative" data-brk-library="component__footer,twitter_init">

    <div class="brk-footer__wrapper pt-70 pt-md-90 border-bottom-3 brk-border-color-light brk-bg-center-cover"
        style="background-image: url({{asset('storage/Main_images/ftrbg.jpg')}})">
        <div class="brk-abs-bg-overlay brk-base-gradient-36"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-12 col-md-6">
                    <h6 class="sr-only">Twitter posts</h6>
                    <a href="#" class="d-sm-inline-block d-block text-center mb-45" style="margin-top:-10px">
                        <img src="{{LogoPath()}}" alt="alt">
                    </a>
                </div>
                <div class="col-xl-3 col-12 col-md-6">
                    <h6
                        class="brk-white-font-color mb-25 font__family-montserrat font__weight-semibold font__size-24 text-center text-sm-left mt-xs-20">
                        {{ Dictionary()['FollowUs'][app()->getLocale()] }}</h6>
                    <hr class="horiz-line mt-0">
                    <div class="brk-social-links brk-social-links_rounded brk-white-font-color mb-25 d-flex justify-content-center justify-content-sm-start"
                         data-brk-library="component__social_links">
                        <a href="https://wa.me/qr/3TUC7RCY4IZMA1" class="brk-social-links__item">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/azarpadtabriz.co?utm_source=qr&igsh=MXdiOGZha2pvZmRnbQ==" class="brk-social-links__item">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://t.me/azarpadtabriz" class="brk-social-links__item">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="https://www.facebook.com/share/1VvynLZMjD/" class="brk-social-links__item">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <hr class="horiz-line mt-0 mb-35">
                    <p class="font__size-36 mb-40 text-sm-left text-center">
                        <a href="#"
                           class="brk-white-font-color font__family-open-sans font__weight-light line__height-36">
                            {{siteInfo()['phone']}} - {{siteInfo()['mobile1']}}</a>
                    </p>
                </div>
                <div class="col-xl-3 col-12 col-md-6">

                    <p
                        class="font__family-open-sans font__weight-bold font__size-14 mb-10 brk-white-font-color text-sm-left text-center">
                        <i class="brk-footer-icon text-middle fa fa-envelope line__height-24"></i>
                        <a href="mailto:{{siteInfo()['email']}}" class="show-inline-block">{{siteInfo()['email']}}</a>
                    </p>
                    <p
                        class="font__family-open-sans font__weight-bold font__size-14 mb-10 brk-white-font-color text-sm-left text-center">
                        <i class="brk-footer-icon text-middle fas fa-map-marker-alt line__height-24 mb-20"></i>
                        <span>{{ Dictionary()['Address'][app()->getLocale()] }}</span>
                    </p>
                </div>
            </div>
            <hr class="horiz-line mt-750 mb-20">
            <div
                class="d-flex align-items-center justify-content-sm-between justify-content-center flex-lg-row flex-column flex-wrap mb-25">
                <p class="brk-dark-font-color-3 font__family-open-sans font__size-14">
                    © {{ Dictionary()['AllRightsReserved'][app()->getLocale()] }}
                </p>
{{--                <div class="brk-social-links brk-dark-font-color-3 font__size-14"--}}
{{--                    data-brk-library="component__social_links">--}}
{{--                    <a href="#" class="brk-social-links__item">--}}
{{--                        <i class="fab fa-twitter"></i>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="brk-social-links__item">--}}
{{--                        <i class="fab fa-instagram"></i>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="brk-social-links__item">--}}
{{--                        <i class="fab fa-google-plus-g"></i>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="brk-social-links__item">--}}
{{--                        <i class="fab fa-youtube"></i>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="brk-social-links__item">--}}
{{--                        <i class="fab fa-vimeo"></i>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="brk-social-links__item">--}}
{{--                        <i class="fab fa-vk"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
