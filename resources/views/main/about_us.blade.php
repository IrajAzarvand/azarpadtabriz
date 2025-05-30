<section class="pt-80 pb-40 position-relative brk-base-bg-13 pt-lg-220">
    <span class="brk-svg-pattern-container brk-svg-pattern-container-7-top brk-svg-pattern-container_top"
        data-brk-library="component__svg_pattern">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 144">
            <defs>
                <path id="path-id-7-1"
                    d="M0 657.88s316.8-72.16 689-15.96c256.8 38.77 524.63 105.83 756 116.7 218.56 10.27 420.43-40.37 475-63.95V616H0z" />
            </defs>
            <g>
                <g transform="translate(0 -616)">
                    <use fill="#fff" xlink:href="#path-id-7-1" />
                </g>
            </g>
        </svg>
    </span>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h2
                    class="mb-10 pt-50 font__family-montserrat font__size-56 font__weight-bold line__height-62 brk-color-base-dark">
                    {{ Dictionary()['AboutUs'][app()->getLocale()] }}</h2>

                <p class="brk-dark-font-color font__size-16 line__height-28 mb-50" style="max-width: 330px">
                    {!! nl2br($about_us[app()->getLocale()])  !!}
                </p>


            </div>
            <div class="col-12 col-lg-7">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="{{$about_us['img']}}" alt="" class="lazyload">
            </div>
        </div>
    </div>

    <span class="brk-svg-pattern-container brk-svg-pattern-container-7-bottom brk-svg-pattern-container_bottom"
        data-brk-library="component__svg_pattern">

    </span>

</section>
