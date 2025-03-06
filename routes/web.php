<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductIntroductionController;
use App\Http\Controllers\ProductSampleController;
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

    //======================= index
    //===== slider
    Route::get('/indexPage/slider', [DashboardPageLoader::class, 'indexPageSlider'])->name('indexPageSlider');
    Route::post('/indexPage/slider/save', [SliderController::class, 'store'])->name('indexPageSliderSave');
    Route::post('/indexPage/slider/update', [SliderController::class, 'update'])->name('indexPageSliderUpdate');
    Route::get('/indexPage/slider/{id}/delete', [SliderController::class, 'destroy'])->name('removeSlider');
    //===== aboutus
    Route::get('/indexPage/AboutUs', [DashboardPageLoader::class, 'indexPageAboutUs'])->name('indexPageAboutUs');
    Route::post('/indexPage/AboutUs/save', [AboutUsController::class, 'store'])->name('indexPageAboutUsSave');
    //===== product samples
    Route::get('/indexPage/productSamples', [DashboardPageLoader::class, 'productSamplesPage'])->name('productSamplesPage');
    Route::post('/indexPage/productSamples/save', [ProductSampleController::class, 'store'])->name('indexPageProductSamplesSave');
    Route::get('/indexPage/productSamples/{id}/delete', [ProductSampleController::class, 'destroy'])->name('removeProductSample');
    Route::post('/indexPage/productSamples/update', [ProductSampleController::class, 'update'])->name('indexPageProductSampleUpdate');

    //===== product introduction
    Route::get('/indexPage/productIntroduction', [DashboardPageLoader::class, 'indexPageProductIntroduction'])->name('productIntroductionPage');
    Route::post('/indexPage/productIntroduction/save', [ProductIntroductionController::class, 'store'])->name('productIntroductionSave');


    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =


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

    //===== edit an item in dashboard
    Route::get('/{page}/{p}/{section}/{item}/edit', [DashboardPageLoader::class, 'editItem'])->name('editSelectedItem');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =


//    //===== trigger when submit button pressed in dashboard forms
//    Route::get('/dashboardSubmit', [DashboardPageLoader::class, 'dashboardSubmit'
//)->name('dashboardSubmit');
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
