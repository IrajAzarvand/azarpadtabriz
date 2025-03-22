<section class="pt-lg-150 pt-90 pb-90 pb-lg-140 bg-white">
    <div class="text-center mb-80">
        <div class="z-index-high" data-brk-library="component__title">
            <h2 class="title__heading-02 title__heading-main font__family-roboto font__size-36 font__weight-bold">{{ Dictionary()['ProductIntroduction'][app()->getLocale()] }}</h2>

        </div>
    </div>
    <div class="container">
        <div class="accordion accordion-slider" role="tablist" aria-multiselectable="true"
            data-brk-library="component__accordions">
            @foreach($PI as $id=>$data)
            <div class="card @if ($loop->first) expanded @endif ">
                <div class="card-header text-left" role="tab" id="heading{{$id}}">
                    <span class="card-dash brk-base-bg-gradient-bottom"></span>
                    <h5
                        class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 brk-base-font-color text-uppercase">
                        <a class="font__weight-medium card-title @unless($loop->first) collapsed @endunless " data-toggle="collapse" data-parent=".accordion-slider"
                            href="#collapse{{$id}}" aria-expanded="false" aria-controls="collapse{{$id}}">
                            <i class="far fa-gem"></i> {{$data['title'][app()->getLocale()]}}
                        </a>
                    </h5>
                    <a class="card-toggle-icon @unless($loop->first) collapsed @endunless" data-toggle="collapse" data-parent=".accordion-slider"
                        href="#collapse{{$id}}" aria-expanded="false" aria-controls="collapse{{$id}}">
                        <span class="before"></span><span class="after"></span>
                    </a>
                </div>
                <div id="collapse{{$id}}" class="collapse @if ($loop->first) show @endif" role="tabpanel" aria-labelledby="heading{{$id}}">
                    <div class="card-block text-left font__family-open-sans">
                        <div class="row">
                            <div class="col-sm-3 order-sm-2 order-xs-1">
                                <div class="slider-wrapper">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                         data-src="{{$data['img']}}" class="lazyload" alt="alt">

                                </div>
                            </div>
                            <div class="col-sm-9 order-sm-1 order-xs-2">
                                <p class="mt-25">
                                    {!! nl2br($data['content'][app()->getLocale()]) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
