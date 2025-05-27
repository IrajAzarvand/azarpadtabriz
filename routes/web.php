<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogCommentsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductAdvantageController;
use App\Http\Controllers\ProductIntroductionController;
use App\Http\Controllers\ProductSampleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TagController;
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
    Route::get('/indexPage/productIntroduction/{id}/delete', [ProductIntroductionController::class, 'destroy'])->name('removeProductIntroduction');
    Route::post('/indexPage/productIntroduction/update', [ProductIntroductionController::class, 'update'])->name('indexPageProductIntroductionUpdate');

   //===== product advantages
    Route::get('/indexPage/productAdvantages', [DashboardPageLoader::class, 'indexPageProductAdvantages'])->name('productAdvantagesPage');
    Route::post('/indexPage/productAdvantages/save', [ProductAdvantageController::class, 'store'])->name('productAdvantagesSave');
    Route::get('/indexPage/productAdvantages/{id}/delete', [ProductAdvantageController::class, 'destroy'])->name('removeProductAdvantages');
    Route::post('/indexPage/productAdvantages/update', [ProductAdvantageController::class, 'update'])->name('indexPageProductAdvantagesUpdate');


   //===== gallery
    Route::get('/indexPage/gallery', [DashboardPageLoader::class, 'indexPageGallery'])->name('GalleryPage');
    Route::post('/indexPage/gallery/save', [GalleryController::class, 'store'])->name('gallerySave');
    Route::get('/indexPage/gallery/{id}/delete', [GalleryController::class, 'destroy'])->name('removeGallery');
    Route::post('/indexPage/gallery/update', [GalleryController::class, 'update'])->name('indexPageGalleryUpdate');
    Route::get('/indexPage/gallery/{id}/{img}/delete', [GalleryController::class, 'removeImage'])->name('removeGalleryImage');

    //===== catalog
    Route::get('/indexPage/catalog', [DashboardPageLoader::class, 'indexPageCatalog'])->name('catalogPage');
    Route::post('/indexPage/catalog/save', [CatalogController::class, 'store'])->name('catalogSave');
    Route::get('/indexPage/catalog/{filename}/delete', [CatalogController::class, 'removeCatalog'])->name('removeCatalog');

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    //===== blog
    Route::get('/blogPage', [DashboardPageLoader::class, 'blogPage'])->name('blogPage');
    Route::post('/blogPage/save', [BlogController::class, 'store'])->name('blogSave');
    Route::get('/blogPage/{id}/delete', [BlogController::class, 'destroy'])->name('removeBlog');
    Route::post('/indexPage/productIntroduction/update', [BlogController::class, 'update'])->name('BlogPageItemUpdate');


    Route::get('/blog/tags', [DashboardPageLoader::class, 'tags'])->name('blogTags');
    Route::post('/blog/tag/save', [TagController::class, 'store'])->name('tagSave');
    Route::get('/blog/tag/{id}/delete', [TagController::class, 'destroy'])->name('removeTag');
    Route::post('/blog/tag/update', [TagController::class, 'update'])->name('TagUpdate');

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

//=======================================================================
//blog page
Route::get('/blog',[MainWebsitePageLoaderController::class,'BlogPage'])->name('BlogPage');
Route::get('/{blogId}',[MainWebsitePageLoaderController::class,'showBlog'])->name('showBlog');
Route::post('/saveBlogComment', [BlogCommentsController::class, 'store'])->name('saveBlogComment');


// index -> catalog
Route::get('{filename}', [MainWebsitePageLoaderController::class, 'download_catalog'])->name('download_catalog');

