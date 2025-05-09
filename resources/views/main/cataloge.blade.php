<section class="pt-lg-100 pt-60 pb-lg-100 pb-70 bg-white" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="text-center mb-40 mb-lg-100">
                    <h2 class="font__family-montserrat font__size-56 font__weight-ultralight line__height-60 mb-25">{{ Dictionary()['ProductCataloges'][app()->getLocale()] }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-12 col-md-6">

                <div class="text-center mb-40 mb-lg-100">
                    <div class="row">
                        @foreach($catalogs as $catalog)
                        <div class="col-md-6">
                            <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{$catalog['image']}}" alt="alt" class="brk-gallery-card__img lazyload">
                                <a href="{{$catalog['image']}}" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center">
                                    <i class="fa fa-arrow-down font__size-36 brk-white-font-color"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--{{route('download_catalog',siteInfo()['borochor1'])}}--}}
{{--{{siteInfo()['borochor1']}}--}}
