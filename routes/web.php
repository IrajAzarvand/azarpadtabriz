<?php

use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPageLoader;
use App\Http\Controllers\MainWebsitePageLoaderController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//Dashboard Routes
//=======================================================================
Route::prefix('dashboard')->middleware('auth')->group(function () {


    //Dashboard Index
    Route::get('/', [DashboardPageLoader::class, 'dashboard'])->name('dashboard');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    //=============Pages

    //===== index
    Route::get('/indexPage', [DashboardPageLoader::class, 'indexPage'])->name('indexPage');
    Route::post('/indexPage/slider/save', [SliderController::class, 'store'])->name('indexPageSliderSave');
    Route::post('/indexPage/slider/{id}/delete', [SliderController::class, 'destroy'])->name('removeSlider');

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    //===== about us
    Route::get('/aboutusPage', [DashboardPageLoader::class, 'aboutusPage'])->name('aboutusPage');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    //===== blog
    Route::get('/blogPage', [DashboardPageLoader::class, 'blogPage'])->name('blogPage');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    //===== usageGreenhouse
    Route::get('/usagePage', [DashboardPageLoader::class, 'usagePage'])->name('usagePage');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    //===== contactUs
    Route::get('/contactUsPage', [DashboardPageLoader::class, 'contactUsPage'])->name('contactUsPage');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =


//    //===== trigger when submit button pressed in dashboard forms
//    Route::get('/dashboardSubmit', [DashboardPageLoader::class, 'dashboardSubmit'])->name('dashboardSubmit');
//    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =


    //Clear Cache
    // Route::get('/cc', function () {
    //     Artisan::call('route:clear');
    //     Artisan::call('route:cache');
    //     echo 'route cache done.';
    //     // Artisan::call('config:clear');
    //     // Artisan::call('config:cache');
    //     // echo 'config cache done.';
    //     Artisan::call('view:clear');
    //     Artisan::call('view:cache');
    //     echo 'view cache done.';
    // })->name('ClearCache');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

});

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
//Change Website Language
Route::get('/locale/{langsymbol}', [MainWebsitePageLoaderController::class, 'SetLocale'])->name('SetLocale');


//Main Website Routes
//=======================================================================
//index page
Route::get('/index', [MainWebsitePageLoaderController::class, 'IndexPage']);
Route::get('/', function () {
    $locale = app()->getLocale();
    $SiteLang = SiteLang();


    if ($SiteLang[app()->getLocale()]['rtl']) {
        return redirect()->to('/index?dir=rtl');
    } else {
        return redirect()->to('/index?dir=ltr');
    }
})->name('MainWebsite');
