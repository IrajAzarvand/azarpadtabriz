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
        return view('dashboard.Page');
    }

    public function blogPage()
    {
        return view('dashboard.Page');
    }


    public function usageGreenhousePage()
    {
        return view('dashboard.Page');
    }

    public function usagePoultryFarmPage()
    {
        return view('dashboard.Page');
    }

    public function usagePowerPlantPage()
    {
        return view('dashboard.Page');
    }

    public function contactUsPage()
    {
        return view('dashboard.Page');
    }

}
