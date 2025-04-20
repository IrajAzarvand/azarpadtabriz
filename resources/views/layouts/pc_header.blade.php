<header
    class="brk-header brk-header_style-1 brk-header_skin-1 position-fixed d-lg-flex flex-column brk-header_color-dark"
    style="display: none;" data-logo-src="{{ LogoPath() }}" data-bg-mobile="{{ LogoPath() }}"
    data-brk-library="component__header">
    <div class="order-2 brk-header__top-bar order-lg-1 font__family-montserrat brk-header__top-bar_scroll"
        style="height: 46px;">
        <div class="brk-header__title font__family-montserrat font__weight-bold">{{
            Dictionary()['ContactUs'][app()->getLocale()] }}</div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="text-left col-lg-6 align-self-lg-stretch">
                    <div class="brk-header__element brk-header__element_skin-2 brk-header__item">
                        <a href="tel:88002003040" class="brk-header__element--wrap">
                            <i class="fa fa-phone"></i>
                            <span class="brk-header__element--label font__weight-semibold">{{siteInfo()['phone']}}</span>
                        </a>
                    </div>
                    <div class="brk-header__element brk-header__element_skin-2 brk-header__item">
                        <a href="#" class="brk-header__element--wrap">
                            <i class="fa fa-envelope"></i>
                            <span class="brk-header__element--label font__weight-medium">{{siteInfo()['email']}}</span>
                        </a>
                    </div>
                </div>
                <div class="text-left col-lg-6 align-self-lg-stretch text-lg-right">


                    <div class="brk-lang brk-lang_interactive brk-header__item">
                        <span class="brk-lang__selected">{{ app()->getLocale() }} <i class="fa fa-caret-down"
                                aria-hidden="true"></i></span>
                        <span class="brk-lang__open"><i class="fa fa-language"></i> Language <span
                                class="text-white brk-lang__active-lang brk-bg-primary">{{ app()->getLocale()
                                }}</span></span>
                        <ul class="brk-lang__option">
                            @foreach (SiteLang() as $locale => $rtl)
                            <li><a href="{{ route('SetLocale', [$locale]) }}">{{ $locale }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="order-1 brk-header__main-bar brk-header_border-top-dark order-lg-2" style="height: 72px;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="ml-10 col-lg-3 align-self-lg-center d-none d-lg-flex">
                    <div class="brk-open-top-bar brk-header__item">
                        <div class="brk-open-top-bar__circle"></div>
                        <div class="brk-open-top-bar__circle"></div>
                        <div class="brk-open-top-bar__circle"></div>
                    </div>
                    <a href="/" class="brk-header__logo brk-header__item @@modifier">
                        <img class="brk-header__logo-1 lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="{{ LogoPath() }}" alt="alt">
                        <img class="brk-header__logo-2 lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="{{ LogoPath() }}" alt="alt">
                    </a>
                </div>
                <div class="col-lg align-self-lg-stretch text-lg-center">
                    <nav class="brk-nav brk-header__item">
                        <ul class="brk-nav__menu">
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="#">
                                    <span>Portfolio</span>
                                </a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect">
                                        <a href="portfolio-categories.html">Portfolio categories</a>
                                    </li>
                                    <li class="dd-effect">
                                        <a href="portfolio-galleries.html">Portfolio galleries</a>
                                    </li>
                                    <li class="dd-effect">
                                        <a href="portfolio-grid.html">Portfolio grid</a>
                                    </li>
                                    <li class="dd-effect">
                                        <a href="portfolio-isotope.html">Portfolio isotope</a>
                                    </li>
                                    <li class="dd-effect">
                                        <a href="portfolio-list.html">Portfolio list</a>
                                    </li>
                                    <li class="dd-effect">
                                        <a href="portfolio-masonry.html">Portfolio masonry</a>
                                    </li>
                                    <li class="dd-effect">
                                        <a href="portfolio-page.html">Portfolio page</a>
                                    </li>
                                    <li class="dd-effect">
                                        <a href="portfolio-rows.html">Portfolio rows</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 align-self-lg-stretch text-lg-right">
                    <div class="brk-header__title font__family-montserrat font__weight-bold">Info</div>
                    <div class="brk-search brk-header__item">

                        <div class="brk-search__block">
                            <span class="brk-search__close font__family-montserrat font__weight-medium">Close <i
                                    class="fas fa-times"></i></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
