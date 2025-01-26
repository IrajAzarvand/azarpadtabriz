<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPageLoader;
use App\Http\Controllers\MainWebsitePageLoaderController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

// });


//Dashboard Routes
//=======================================================================
Route::prefix('dashboard')->middleware('auth')->group(function () {


    //Dashboard Index
    Route::get('/', [DashboardPageLoader::class, 'dashboard'])->name('dashboard');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    //Pages / index
    Route::get('/pages/index', [DashboardPageLoader::class, 'pagesIndex'])->name('pagesIndex');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =


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
