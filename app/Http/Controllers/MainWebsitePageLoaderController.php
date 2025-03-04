<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\ProductSample;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MainWebsitePageLoaderController extends Controller
{

    public $slider_path='storage/Main_images/Sliders/';
    public $aboutus_path='storage/Main_images/AboutUs/';
    public $product_samples_path='storage/Main_images/ProductSamples/';
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
//  ============================================      Slider Section
        $sliders=Slider::with('contents')->get();

        $SL=[];
        foreach ($sliders as $slider) {
            foreach (SiteLang() as $locale => $specs) {
                    $SL[$slider->id][$locale] = $slider->contents->where('locale', $locale)->where('element_id', $slider->id)->pluck('element_content')[0];
                }
                    $SL[$slider->id]['img']=$this->slider_path.$slider->slider_image;
        }

//  ============================================      About Us Section
        try {
            $aboutus = aboutUs::with('contents')->get()[0];
            if ($aboutus) {
                foreach (SiteLang() as $locale => $specs) {
                    $about_us[$locale] = $aboutus->contents->where('locale', $locale)->where('element_id', $aboutus->id)->pluck('element_content')[0];
                }
            }
            $filename = File::allFiles($this->aboutus_path)[0]->getFilename();
            $about_us['img'] = $this->aboutus_path . $filename;
        }
        catch (\Exception $exception){
            foreach (SiteLang() as $locale => $specs) {
                $about_us[$locale] = '';
                $about_us['img'] = '';
            }
        }

//  ============================================      product samples Section
        $productSamples=ProductSample::with('contents')->get();

        $PS=[];
        foreach ($productSamples as $productSample) {
            foreach (SiteLang() as $locale => $specs) {
                $PS[$productSample->id][$locale] = $productSample->contents->where('locale', $locale)->where('element_id', $slider->id)->pluck('element_content')[0];
            }
            $PS[$productSample->id]['img']=$this->product_samples_path.$productSample->image_name;
        }





        return view('welcome', compact('SL','about_us'));
    }


}
