<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\ProductIntroduction;
use App\Models\ProductSample;
use App\Models\Slider;
use Illuminate\Support\Str;


class DashboardPageLoader extends Controller
{
    public $slider_file_path='storage/Main_images/Sliders/';
    public $product_samples_path='storage/Main_images/ProductSamples/';
    public $product_introductions_path='storage/Main_images/ProductIntroduction/';

    public function dashboard(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='داشبورد';
        $Page='';
        return view('dashboard.Page',compact('Name','Page'));
    }

    public function indexPageSlider(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='اسلایدر';
        $FormSubmitRoute='indexPageSliderSave';

//        read slider from db
        $Sliders = Slider::with('contents')->get();
        $SL = [];

        foreach ($Sliders as $key => $item) {
            $SL[$item->id]['content'] = $item->contents()->where('locale', 'FA')->pluck('element_content')[0];
            $SL[$item->id]['image'] =asset($this->slider_file_path. $item->slider_image);

        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute', 'SL'));
    }


    public function indexPageAboutUs(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='درباره ما';
        $FormSubmitRoute='indexPageAboutUsSave';
        $selectedItem=[];
        $currtentItem=aboutUs::with('contents')->find(1);
        if($currtentItem){
            foreach (SiteLang() as $locale => $specs) {
                $selectedItem[$locale] = $currtentItem->contents->where('locale', $locale)->where('element_id', $currtentItem->id)->pluck('element_content')[0];

            }


        }
        return view('dashboard.Page',compact('Name','Page','selectedItem','FormSubmitRoute'));
    }

    public function productSamplesPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='نمونه محصولات';
        $FormSubmitRoute='indexPageProductSamplesSave';

        //        read product samples from db
        $ProductSamples = ProductSample::with('contents')->get();
        $PS = [];

        foreach ($ProductSamples as $key => $item) {
            $PS[$item->id]['content'] = $item->contents()->where('locale', 'FA')->pluck('element_content')[0];
            $PS[$item->id]['image'] =asset($this->product_samples_path. $item->image_name);

        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute','PS'));
    }




    public function indexPageProductIntroduction(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='معرفی محصولات';
        $FormSubmitRoute='productIntroductionSave';

//        read slider from db
        $product_introductions = ProductIntroduction::with('contents')->get();
        $PI = [];

        foreach ($product_introductions as $key => $item) {
            $PI[$item->id]['content'] = $item->contents()->where('locale', 'FA')->where('element_title', 'title_FA')->pluck('element_content')[0];
            $PI[$item->id]['image'] =asset($this->product_introductions_path. $item->image);

        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute', 'PI'));
    }




    public function blogPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='وبلاگ';
        return view('dashboard.Page',compact('Name','Page'));
    }


    public function usagePage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        //usageGreenhousePage گلخانه
        //usagePoultryFarmPage مرغداری ها
        //usagePowerPlantPage نیروگاه ها
        $Name='صفحات';
        $Page='کاربردها';
        return view('dashboard.Page',compact('Name','Page'));
    }

    public function contactUsPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='تماس با ما';
        return view('dashboard.Page',compact('Name','Page'));
    }


 public function editItem(string $selectedPage, string $p, string $selectedSection, int $selectedItemId): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
//dd($selectedPage, $selectedSection, $selectedItemId, $p);
        $Name='صفحات';
        $Page='ویرایش آیتم';
//        should be fixed


        $selectedItem=[];
        switch ($selectedSection) {
//            depends on the page that user is currently visiting
            case 'slider':
                $selectedSlider=Slider::where('id',$selectedItemId)->with('contents')->first();
                $selectedItem['itemImage']=asset($this->slider_file_path. $selectedSlider->slider_image);
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selectedSlider->contents->where('locale', $locale)->pluck('element_content')[0];
                }
                $FormSubmitRoute='indexPageSliderUpdate';

            break;

            case 'productSamples':
                $selectedProduct=ProductSample::where('id',$selectedItemId)->with('contents')->first();
                $selectedItem['itemImage']=asset($this->product_samples_path. $selectedProduct->image_name);
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selectedProduct->contents->where('locale', $locale)->pluck('element_content')[0];
                }
                $FormSubmitRoute='indexPageProductSampleUpdate';
            break;

            case 'ProductIntroduction':
                $selected=ProductIntroduction::where('id',$selectedItemId)->with('contents')->first();
                $selectedItem['itemImage']=asset($this->product_introductions_path. $selected->image);
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selected->contents->where('locale', $locale)->where('element_title', 'title_'.$locale)->pluck('element_content')[0]. $selected->contents->where('locale', $locale)->where('element_title', 'content_'.$locale)->pluck('element_content')[0];
//                    $selectedItem[$locale] = $selected->contents->where('locale', $locale)->where('element_title', 'content_'.$locale)->pluck('element_content')[0];
                }
                $FormSubmitRoute='indexPageProductIntroductionUpdate';
            break;
        }



        return view('dashboard.Page',compact('Name','Page','p','selectedSection','selectedItemId','FormSubmitRoute','selectedItem'));
    }

}
