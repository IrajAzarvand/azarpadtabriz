<section class="pt-lg-130 pb-lg-100 pt-70 pb-70">
    <div class="text-center mb-40">

        <h3 class="font__family-montserrat font__weight-semibold font__size-30 letter-spacing-100 text-uppercase mt-10"
            data-brk-library="component__title">{{ Dictionary()['ProductSamples'][app()->getLocale()] }}</h3>

    </div>
    <div class="container">
        <div class="row">
            @foreach($PS as $p_s)
            <div class="col-lg-4 col-sm-6">
                <article class="brk-team-persone-circle brk-base-box-shadow text-center"
                    data-brk-library="component__team">
                    <div class="brk-team-persone-circle__name-position">
                            <h4 class="font__family-montserrat font__weight-bold font__size-18">{{ $p_s[app()->getLocale()] }}</h4>

                    </div>
                    <div class="brk-team-persone-circle__bg lazyload" data-bg="{{$p_s['img']}}">
                        <span class="brk-team-persone-circle__bg-overlay">
                            <span class="before brk-base-bg-primary-90"></span>
                            <svg viewBox="0 0 270 37">
                                <path d="M270,37H0V0A267.6,267.6,0,0,0,135.53,36.5,267.52,267.52,0,0,0,270,0Z"
                                    fill="rgb(255, 255, 255)" />
                            </svg>
                        </span>

                    </div>

                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
