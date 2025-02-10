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
        $Page='صفحه اصلی';

//        read slider from db
        $Sliders = Slider::with('contents')->get();
        $SL = [];
        foreach ($Sliders as $key => $item) {
            $SL[$item->id] = $item->contents()->where('locale', 'FA')->pluck('element_content')[0];
        }

        return view('dashboard.Page',compact('Name','Page', 'SL'));
    }


    public function aboutusPage()
    {
        $Name='صفحات';
        $Page='درباره ما';
        return view('dashboard.Page',compact('Name','Page'));
    }

    public function blogPage()
    {
        $Name='صفحات';
        $Page='وبلاگ';
        return view('dashboard.Page',compact('Name','Page'));
    }


    public function usagePage()
    {
        //usageGreenhousePage گلخانه
        //usagePoultryFarmPage مرغداری ها
        //usagePowerPlantPage نیروگاه ها
        $Name='صفحات';
        $Page='کاربردها';
        return view('dashboard.Page',compact('Name','Page'));
    }

    public function contactUsPage()
    {
        $Name='صفحات';
        $Page='تماس با ما';
        return view('dashboard.Page',compact('Name','Page'));
    }


    public function dashboardSubmit(Request $request)
    {
        dd('dashboard page loader controller', $request);
    }
}
