@extends('layouts.master_layout')

@section('contents')

    <div class="container mt-90">
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="pt-160 pb-130 position-relative">
                    <span class="brk-abs-overlay bg-cover bg-lg-contain" style="left: -130px; width: calc(100% + 240px); background-repeat: no-repeat;  background-image: url('{{asset('storage/Main_images/footer-shape-1.svg')}}')"></span>
                    <h5 class="brk-white-font-color font__family-montserrat font__size-42 line__height-50 font__weight-bold text-uppercase text-center text-sm-left">{{ Dictionary()['ContactUs'][app()->getLocale()] }}</h5>
                    <p class="brk-white-font-color font__family-montserrat font__size-25 font__weight-light line__height-30 mb-30 text-center text-sm-left">{{ Dictionary()['AskForHelp'][app()->getLocale()] }}</p>
                    <p class="brk-white-font-color font__size-16 font__weight-normal line__height-26 mb-20 text-center text-sm-left">
                        {{ Dictionary()['ContactUsDetail'][app()->getLocale()] }}
                    </p>
                    <hr class="horiz-line mb-10 mt-30">
                    <div class="d-flex flex-wrap brk-footer__info-grid flex-sm-row flex-column brk-white-font-color text-center text-sm-left">
                        <p class="font__family-open-sans font__weight-bold font__size-14 mt-10">
                            <i class="brk-footer-icon text-middle fa fa-envelope line__height-24"></i>
                            <a href="mailto:{{siteInfo()['email']}}" class="show-inline-block">{{siteInfo()['email']}}</a>
                        </p>


                        <p class="font__family-open-sans font__weight-bold font__size-14 mt-10">
                            <i class="brk-footer-icon text-middle fa fa-phone line__height-24"></i>
                            <a href="#" class="show-inline-block">{{siteInfo()['mobile1']}}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2"></div>
            <div class="col-xl-6">
                <form action="{{route('CUSave')}}" method="post" class="brk-form-strict pt-md-120 pt-50 z-index-3">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" required placeholder="{{ Dictionary()['Name'][app()->getLocale()] }}" name="name">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" required placeholder="{{ Dictionary()['Email'][app()->getLocale()] }}" name="email">
                        </div>
                        <div class="col-12">
                            <input type="text" required placeholder="{{ Dictionary()['Subject'][app()->getLocale()] }}" name="subject">
                        </div>
                        <div class="col-12">
                            <textarea name="message" required id="footer15" placeholder="{{ Dictionary()['Message'][app()->getLocale()] }}" class="bordered-bottom"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn-backgrounds btn-backgrounds_left-icon btn-backgrounds_white font__family-montserrat font__weight-bold text-uppercase font__size-13 mt-50 mb-10">
                            {{ Dictionary()['Send'][app()->getLocale()] }}
                            <span class="before line__height-15">
                                <i class="far fa-hand-point-right font__size-15"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
