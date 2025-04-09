<section class="pb-lg-90 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="text-center mb-lg-100 mb-70">

                    <h3 class="font__family-montserrat font__weight-bold title-lines-double title-lines-main"
                        data-brk-library="component__title">
                        <span class="line"></span>
                        <span class="text">{{ Dictionary()['ProductAdvantage'][app()->getLocale()] }}</span>
                        <span class="line"></span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                @foreach($PA as $id=>$data)

                <div class="progress__wrapper progress__light" data-brk-library="component__progress_bar">
                    <h5 class="font__family-oxygen font__size-21 font__weight-light text-uppercase progress__title">
                       {{$data['text'][app()->getLocale()]}}</h5>
                    <div class="progress">
                        <div data-valuemax="100" data-valuemin="0" data-valuenow="{{$data['percent'][app()->getLocale()]}}" class="progress__bar">
                            <div class="progress__bar-counter_wrap">
                                <span class="before"></span>
                                <span
                                    class="font__family-oxygen font__size-16 font__weight-light progress__bar-counter hide">{{$data['percent'][app()->getLocale()]}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
            <div class="col-12 col-lg-4">
{{--             {{-- we may need to upload image to this part --}}
            </div>
        </div>
    </div>
</section>
