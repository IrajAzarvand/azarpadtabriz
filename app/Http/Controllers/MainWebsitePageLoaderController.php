<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\Gallery;
use App\Models\ProductAdvantage;
use App\Models\ProductIntroduction;
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
    public $product_introductions_path='storage/Main_images/ProductIntroduction/';
    public $product_Advantages_path='storage/Main_images/ProductAdvantages/';

    public $galleries_path='storage/Main_images/Gallery/';



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
                $PS[$productSample->id][$locale] = $productSample->contents->where('locale', $locale)->where('element_id', $productSample->id)->pluck('element_content')[0];
            }
            $PS[$productSample->id]['img']=$this->product_samples_path.$productSample->image_name;
        }

//  ============================================      product introduction Section
        $productIntroductions=ProductIntroduction::with('contents')->get();
        $PI=[];
        foreach ($productIntroductions as $productIntroduction) {
            foreach (SiteLang() as $locale => $specs) {
                $PI[$productIntroduction->id]['title'][$locale] = $productIntroduction->contents->where('locale', $locale)->where('element_id', $productIntroduction->id)->where('element_title', 'title_'.$locale)->pluck('element_content')[0];
                $PI[$productIntroduction->id]['content'][$locale] = $productIntroduction->contents->where('locale', $locale)->where('element_id', $productIntroduction->id)->where('element_title', 'content_'.$locale)->pluck('element_content')[0];
            }
            $PI[$productIntroduction->id]['img']=$this->product_introductions_path.$productIntroduction->image;
        }


//  ============================================      product advantages Section
        $productAdvantages=ProductAdvantage::with('contents')->get();
        $PA=[];
        $data=[];
        foreach ($productAdvantages as $productAdvantage) {

            foreach (SiteLang() as $locale => $specs) {
                $data[$locale] = $productAdvantage->contents->where('locale', $locale)->where('element_id', $productAdvantage->id)->where('element_title', 'ProductAdvantages_'.$locale)->pluck('element_content')[0];
            }
//            $PA[$productIntroduction->id]['img']=$this->product_Advantages_path.$productAdvantage->image;
        }

        //devide each row of each lang to separate item
        foreach ($data as $lang=>$datum){
                $content[$lang]= explode("\n", $datum);

        }

        //devide each item of content to 2 piece and extract number from it
        foreach ($content as $locale=>$data){
            foreach ($data as $id=>$dt){
                if($locale==app()->getLocale()){
                $PA[$id]['percent'][$locale]= preg_replace('/[^0-9]/','',$dt);
                $PA[$id]['text'][$locale]= preg_replace('/[0-9]+/', '', $dt);
                }
            }
        }


//  ============================================      gallery Section
        $galleries=[];
        try {
            $Galleries = Gallery::with('contents')->get();
            if ($Galleries) {
                foreach ($Galleries as $gallery) {
                    foreach (SiteLang() as $locale => $specs) {
                        if ($locale == app()->getLocale()) {
                            $galleries[$gallery->id]['title'] = $gallery->contents->where('locale', $locale)->where('element_id', $gallery->id)->pluck('element_content')[0];
                        }
                    }
                    foreach (File::allFiles($this->galleries_path.$gallery->id) as $file) {

                $galleries[$gallery->id]['images'][] = asset($this->galleries_path. $gallery->id . '\\' . $file->getFilename()) ;
                    }
                }


            }

//            $about_us['img'] = $this->aboutus_path . $filename;
        }
        catch (\Exception $exception){
            foreach (SiteLang() as $locale => $specs) {
                $galleries[$locale] = '';
                $galleries['images'] = '';
            }
        }

//  ============================================
//dd($galleries);


        return view('welcome', compact('SL','about_us','PS','PI','PA','galleries'));
    }


    public function download_catalog(string $filename)
    {
        return response()->download($filename);
    }

}
