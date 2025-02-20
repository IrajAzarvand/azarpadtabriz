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

        foreach ($sliders as $key => $Item) {
            foreach ($Item as $Prod) {
                $NP[$key]['id'] = $Prod->id;
                $NP[$key]['image'] = asset($this->ProductsImageFolder .  $Prod->id . '/sample.jpg');
                $NP_Ptype = Ptype::where('id', $Prod->ptype_id)->with('contents')->first();


                foreach (SiteLang() as $locale => $specs) {
                    $NP[$key]['FullText' . $locale] = $Prod->contents->where('locale', $locale)->where('element_title', 'ProductIntro')->pluck('element_content')[0];
                    $NP[$key]['ShortText' . $locale] = array_values(array_filter(preg_split("/[()]/", $NP[$key]['FullText' . $locale])))[1];
                    $NP[$key]['Ptype' . $locale] = $NP_Ptype->contents()->where('locale', $locale)->pluck('element_content')[0];
                }
            }
        }
        dd($sliders);
        return view('welcome');
    }


}
