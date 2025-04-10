<section class="pt-15 pt-xs-50 z-index-3 position-relative">
    <span class="brk-svg-pattern-container brk-svg-pattern-container-1 brk-svg-pattern-container_top"
        data-brk-library="component__svg_pattern">

    </span>
    <div class="pt-250 pb-250 brk-abs-overlay opacity-10 brk-bg-pattern">
        <span class="brk-abs-bg-overlay"></span>
    </div>
    <div class="text-center mb-lg-50 mb-40">
        <h2 class="title__heading-06 title__heading-sub wow zoomIn font__family-
        montserrat font__size-56 font__weight-bold"
            data-brk-library="component__title">
            <span class="brk-base-font-color opacity-10 text-capitalize">{{ Dictionary()['ProductCataloges'][app()->getLocale()] }}</span>
        </h2>
        <h2 class="title__heading-06 title__heading-main font__family-montserrat font__size-40 font__weight-ultralight"
            data-brk-library="component__title">
            <span class="font__weight-light">{{ Dictionary()['ProductCataloges'][app()->getLocale()] }}</span>
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="mb-30">
                    <div class="staff-slider" data-perwiew="5" data-brk-library="slider__swiper">
                        <div class="staff-slider-container swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brk-team-staff brk-base-box-shadow" data-brk-library="component__team">
                                        <div class="brk-team-staff__img lazyload" data-bg="{{siteInfo()['borochor1']}}">
                                        </div>
                                        <a href="{{route('download_catalog',siteInfo()['borochor1'])}}" class="brk-team-staff__link"><i class="far fa-arrow-down"></i><i
                                                class="far fa-angle-right"></i></a>
                                        <div class="brk-team-staff__description">
                                            <div class="before brk-base-bg-gradient-90deg-96"></div>
                                            <h4>
                                                <a href="#"
                                                    class="font__family-montserrat font__weight-normal font__size-18 line__height-26">
                                                    borochor1
                                                </a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brk-team-staff brk-base-box-shadow" data-brk-library="component__team">
                                        <div class="brk-team-staff__img lazyload" data-bg="img/270x270_14.jpg">
                                        </div>
                                        <a href="#" class="brk-team-staff__link"><i class="far fa-arrow-down"></i><i
                                                class="far fa-angle-right"></i></a>
                                        <div class="brk-team-staff__description">
                                            <div class="before brk-base-bg-gradient-90deg-96"></div>
                                            <h4>
                                                <a href="#"
                                                    class="font__family-montserrat font__weight-normal font__size-18 line__height-26">
                                                    Bernard Show
                                                </a>
                                                <span
                                                    class="font__family-montserrat font__weight-ultralight font__size-15 line__height-21">
                                                    Web Developer
                                                </span>
                                            </h4>
                                            <div class="brk-team-staff__social-links sl-2x">
                                                <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
{{--                        <div class="dots-base-staff-skin">--}}
{{--                            <div class="swiper-arrow button-prev"><i class="far fa-angle-left" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                            <ul class="pagination"></ul>--}}
{{--                            <div class="swiper-arrow button-next"><i class="far fa-angle-right" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
