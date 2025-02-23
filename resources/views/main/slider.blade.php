
<div id="rev_slider_12_1_wrapper" class="rev_slider_wrapper fullscreen-container"
    data-alias="{{ siteName() }} data-source=" gallery" style="background:transparent;padding:0px;">
    <div id="rev_slider_12_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
        <ul>
            @foreach($SL as $id=>$slider)


            <li data-index="rs-{{$id}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1400"
                data-thumb="img/home_page_3/100x50_e1689-brk_slide-1.jpg" data-rotate="0" data-saveperformance="off"
                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <img src="{{$slider['img']}}" alt="" data-bgposition="center center"
                    data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                <div class="tp-caption rev_group" id="slide-{{$id}}-layer-13" data-x="['left','left','center','center']"
                    data-hoffset="['230','120','0','0']" data-y="['middle','middle','middle','middle']"
                    data-voffset="['-70','-70','-70','-70']" data-width="['801','587','539','480']"
                    data-height="['236','187','167','155']" data-whitespace="nowrap" data-type="group"
                    data-basealign="slide" data-responsive_offset="on"
                    data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                    data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="z-index: 6; min-width: 801px; max-width: 801px; max-width: 236px; max-width: 236px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                    <div class="tp-caption" id="slide-{{$id}}-layer-4" data-x="['left','left','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                        data-voffset="['45','34','34','34']" data-fontsize="['80','60','54','48']"
                        data-lineheight="['88','68','60','54']" data-width="['791','577','532','456']"
                        data-height="['none','137','121','none']" data-whitespace="normal" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":"+0","speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                        data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 8; min-width: 791px; max-width: 791px; white-space: normal; font-size: 80px; line-height: 88px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">
                        {{ $slider[app()->getLocale()] }} </div>
                </div>

                <div class="tp-caption tp-resizeme" id="slide-{{$id}}-layer-1" data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"
                    data-voffset="['-1','-1','-1','-1']" data-width="full" data-height="none" data-whitespace="nowrap"
                    data-visibility="['on','on','off','off']" data-type="image" data-basealign="slide"
                    data-responsive_offset="on"
                    data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                    style="z-index: 5;"><img src="{{asset('storage/Main_images/Sliders/slider_footer_shape.png')}}" alt=""
                        data-ww="['full','full','full','full']" data-hh="" data-no-retina> </div>
            </li>
                @endforeach

        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
