<?php

namespace App\Http\Controllers;

use App\Models\Slider;


class DashboardPageLoader extends Controller
{
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
            $SL[$item->id] = $item->contents()->where('locale', 'FA')->pluck('element_content')[0];
        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute', 'SL'));
    }


    public function aboutusPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='درباره ما';
        return view('dashboard.Page',compact('Name','Page'));
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

}
