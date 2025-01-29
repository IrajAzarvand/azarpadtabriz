<?php

namespace App\Http\Controllers;

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
        return view('dashboard.Page',compact('Name','Section'));
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