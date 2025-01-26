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

}
