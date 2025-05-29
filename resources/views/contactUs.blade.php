@extends('layouts.master_layout')

@section('contents')
            <div class="col-xl-6 col-12">
                <div class="brk-map h-100" data-height="520" data-brk-library="component__map">
                    <div class="brk-map__section">
                        <div class="brk-map__canvas h-100" data-address="412 Throop Ave, Brooklyn, NY 11221, USA" data-zoom="13" data-type="roadmap" data-marker="{{asset('img/gm-1.png')}}" data-offset-lat="0.0047" data-style="silver" data-lat="40.6898297" data-lng="-73.94250620000003">
                        </div>
                    </div>
                    <div class="brk-map__infoicon brk-map__infoicon_layout-one text-center">
								<span class="marker">
									<img src="{{asset('img/gm-1.png')}}" alt="alt">
								</span>
                        <h4 class="font__family-montserrat font__weight-bold font__size-21 line__height-22">Chicago, USA</h4>
                        <div class="brk-map__infoicon--text">
                            <ul class="font__size-15 line__height-21">
                                <li class="brk-dark-font-color">
                                    <i class="fas fa-phone brk-base-font-color font__size-13"></i>
                                    <a href="tel:8800123456789">8 800 123 456 789</a>
                                </li>
                                <li class="brk-dark-font-color">
                                    <i class="far fa-clock brk-base-font-color font__size-13"></i>
                                    <span>Mon - Sat 8:00 - 18:00<br>Sunday CLOSED</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="brk-base-bg-gradient-40-no-opacity h-100">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-7">
                            <div class="all-light text-center text-sm-left pt-md-80 pb-md-90 pt-40 pb-35 pl-md-60 pl-15 pr-15 pr-md-30">
                                <a href="#" class="d-inline-block pt-1">
                                    <img src="{{asset('img/logo.svg')}}" alt="alt">
                                </a>
                                <hr class="horiz-line" style="margin-top: 20px; margin-bottom: 47px;">
                                <p class="font__family-open-sans font__size-14 line__height-21 brk-white-font-color">Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                    eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra fequis, feugiat arutr, tellus.
                                    Phasellus viverra nulla ut metus varius laoreet. </p>
                                <hr class="horiz-line" style="margin-bottom: 12px;">
                                <div class="d-flex flex-wrap brk-footer__info-grid flex-sm-row flex-column mb-50">
                                    <p class="font__family-open-sans font__weight-bold font__size-14 mt-10">
                                        <i class="brk-footer-icon text-middle fa fa-map-marker line__height-24"></i>Chicago
                                    </p>
                                    <p class="font__family-open-sans font__weight-bold font__size-14 mt-10">
                                        <i class="brk-footer-icon text-middle fa fa-envelope line__height-24"></i>
                                        <a href="mailto:i@nikadevs.com" class="show-inline-block">we@dev.com</a>
                                    </p>
                                    <p class="font__family-open-sans font__weight-bold font__size-14 mt-10">
                                        <i class="brk-footer-icon text-middle fa fa-comments line__height-24"></i>Contact
                                    </p>
                                    <p class="font__family-open-sans font__weight-bold font__size-14 mt-10">
                                        <i class="brk-footer-icon text-middle fa fa-phone line__height-24"></i>
                                        <a href="#" class="show-inline-block">800 12 34 567</a>
                                    </p>
                                </div>
                                <form action="#" name="subscribe" class="brk-subscribe-mail" data-brk-library="recaptcha">
                                    <div class="brk-subscribe brk-subscribe-map">
                                        <input name="EMAIL" type="email" placeholder="enter-your@mail.com">
                                        <button type="submit">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="pt-80 pt-xs-20 pb-50 pr-30">
                                <h6 class="brk-white-font-color text-center text-sm-left font__family-montserrat font__size-36 font__weight-bold line__height-36">
                                    Our Twitter
                                </h6>
                                <hr class="horiz-line mb-40" style="margin-top: 19px;">
                                <div class="brk-styled-twitter-3 pr-xs-15 pl-xs-15">
                                    <a href="https://twitter.com/We_Nikadevs" class="twitter-timeline" data-tweet-limit="2" data-chrome="noheader,transparent,nofooter,noborders" data-theme="dark"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
