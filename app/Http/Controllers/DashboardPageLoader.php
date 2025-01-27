<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPageLoader extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function indexPage()
    {
        return view('dashboard.indexPage');
    }


    public function aboutusPage()
    {
        return view('dashboard.indexPage');
    }

    public function blogPage()
    {
        return view('dashboard.indexPage');
    }


    public function usageGreenhousePage()
    {
        return view('dashboard.indexPage');
    }

    public function usagePoultryFarmPage()
    {
        return view('dashboard.indexPage');
    }

    public function usagePowerPlantPage()
    {
        return view('dashboard.indexPage');
    }

    public function contactUsPage()
    {
        return view('dashboard.indexPage');
    }

}
