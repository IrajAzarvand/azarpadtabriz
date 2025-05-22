<div class="container mb-180" dir="ltr">
    <div class="brk-gradien-carousel position-relative brk-z-index-10" data-brk-library="component__gallery_sliders,fancybox">
        <ul class="brk-sort-list font__family-montserrat font__size-15 font__weight-bold text-uppercase letter-spacing-20 brk-sort-list_full-width brk-sort-list_bottom-indicators mb-40" data-brk-library="component__gallery_sliders_css">
            <li class="brk-sort-list__item active" data-filter="all">
                <span>*</span>
            </li>
            @isset($galleries)
               @if($galleries['images'] != "")
            @foreach($galleries as $id=>$gallery)
            <li class="brk-sort-list__item" data-filter="{{$id}}">
                <span>{{$gallery['title']}}</span>
            </li>

            @endforeach
                @endif
            @endisset
        </ul>
        <div class="brk-bordered-bg pt-100 pb-130">
            <div class="brk-bordered-bg__img brk-abs-overlay brk-bgi-1 brk-bg-pattern">
            </div>
            <div class="brk-abs-overlay brk-base-bg-gradient-10deg"></div>
            <div class="brk-gradien-carousel__items slick-loading">

                @isset($galleries)
                    @if($galleries['images'] != "")

                    @foreach($galleries as $id=>$gallery)
                        @foreach($gallery['images'] as $image)

                <div>
                    <div class="brk-gradient-card brk-gradient-card_hover-sizer" data-filter="{{$id}}" data-brk-library="component__gallery_sliders_css">
                        <img class="brk-gradient-card__img lazyload" alt="alt" data-src="{{$image}}">
                        <div class="brk-gradient-card__overlay brk-base-bg-gradient-6-black"></div>
                        <div class="brk-gradient-card__body">
                            <a href="{{$image}}" class="brk-gradient-card__img-frame fancybox">
                                <i class="fal fa-plus font__size-23 brk-base-font-color"></i>
                            </a>

                            <a href="#" class="brk-gradient-card__link text-uppercase font__family-montserrat brk-white-font-color">
                                <i class="fal fa-long-arrow-right font__size-17"></i>
                            </a>
                        </div>
                    </div>
                </div>
                        @endforeach
                    @endforeach
                    @endif

                @endisset

            </div>
        </div>
    </div>
</div>
