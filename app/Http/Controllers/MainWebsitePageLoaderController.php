<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MainWebsitePageLoaderController extends Controller
{

    public $slider_path='storage/Main_images/Sliders/';
    //set website locale to user selected
    public function SetLocale(string $langsymbol)
    {

        $NeedDirection = ['index']; //pages that needs ?dir=... at the end of address bar
        $prev_url = url()->previous();
        $SpecialAddress = false; //pretend that the current address dont need ?dir for default

        foreach ($NeedDirection as $page) {
            $SpecialAddress = Str::contains($prev_url, $NeedDirection);

            if ($SpecialAddress) {
                break;
            }
        }



        $TrimmedUrl = trim($prev_url, '?dir=rtl');
        $RawUrl = trim($TrimmedUrl, '?dir=ltr');

        Session::put('locale', $langsymbol);

        App::SetLocale($langsymbol);

        $SiteLang = SiteLang();


        if ($SpecialAddress) {
            if ($SiteLang[$langsymbol]['rtl']) {
                return redirect($RawUrl . '?dir=rtl');
            } else {
                return redirect($RawUrl . '?dir=ltr');
            }
        } else {
            return redirect($RawUrl);
        }
    }



    //Main Website
    public function IndexPage()
    {
//        Slider Section
        $sliders=Slider::with('contents')->get();

//        dd($sliders);
        foreach ($sliders as $slider) {
            foreach (SiteLang() as $locale => $specs) {
                    $SL[$slider->id][$locale] = $slider->contents->where('locale', $locale)->where('element_id', $slider->id)->pluck('element_content')[0];
                }
                    $SL[$slider->id]['img']=$this->slider_path.$slider->slider_image;
        }

        return view('welcome', compact('SL'));
    }


}
