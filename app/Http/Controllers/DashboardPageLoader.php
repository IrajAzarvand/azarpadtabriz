<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardPageLoader extends Controller
{
    public function dashboard()
    {
        $Name='داشبورد';
        $Section='';
        return view('dashboard.Page',compact('Name','Section'));
    }

    public function indexPage()
    {

        $Name='صفحات';
        $Section='صفحه اصلی';

//        read slider from db
        $Sliders = Slider::with('contents')->get();
        $SL = [];
        foreach ($Sliders as $key => $item) {
            $SL[$item->id] = $item->contents()->where('locale', 'FA')->pluck('element_content')[0];
        }

        return view('dashboard.Page',compact('Name','Section', 'SL'));
    }


    public function aboutusPage()
    {
        $Name='صفحات';
        $Section='درباره ما';
        return view('dashboard.Page',compact('Name','Section'));
    }

    public function blogPage()
    {
        $Name='صفحات';
        $Section='وبلاگ';
        return view('dashboard.Page',compact('Name','Section'));
    }


    public function usagePage()
    {
        //usageGreenhousePage گلخانه
        //usagePoultryFarmPage مرغداری ها
        //usagePowerPlantPage نیروگاه ها
        $Name='صفحات';
        $Section='کاربردها';
        return view('dashboard.Page',compact('Name','Section'));
    }

    public function contactUsPage()
    {
        $Name='صفحات';
        $Section='تماس با ما';
        return view('dashboard.Page',compact('Name','Section'));
    }

}
