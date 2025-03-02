<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\Slider;


class DashboardPageLoader extends Controller
{
    public $slider_file_path='storage/Main_images/Sliders/';
    public function dashboard(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='داشبورد';
        $Page='';
        return view('dashboard.Page',compact('Name','Page'));
    }

    public function indexPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {

        $Name='صفحات';
        $Page='صفحه اصلی';
        $FormSubmitRoute='indexPageSliderSave';

//        read slider from db
        $Sliders = Slider::with('contents')->get();
        $SL = [];

        foreach ($Sliders as $key => $item) {
            $SL[$item->id]['content'] = $item->contents()->where('locale', 'FA')->pluck('element_content')[0];
            $SL[$item->id]['image'] =asset($this->slider_file_path. $item->slider_image);

        }
//dd($SL);

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute', 'SL'));
    }


    public function aboutusPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
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
        switch ($p) {
//            depends on the page that user is currently visiting
            case 'index':
                $selectedSlider=Slider::where('id',$selectedItemId)->with('contents')->first();
                $selectedItem['itemImage']=asset($this->slider_file_path. $selectedSlider->slider_image);
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selectedSlider->contents->where('locale', $locale)->pluck('element_content')[0];
                }

                break;

                case 'aboutus':
                    echo 'hi';
                    break;
        }

     $FormSubmitRoute='indexPageSliderUpdate';


        return view('dashboard.Page',compact('Name','Page','p','selectedSection','selectedItemId','FormSubmitRoute','selectedItem'));
    }

}
