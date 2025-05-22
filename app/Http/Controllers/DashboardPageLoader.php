<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\Gallery;
use App\Models\ProductAdvantage;
use App\Models\ProductIntroduction;
use App\Models\ProductSample;
use App\Models\Slider;
use App\Models\Tag;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class DashboardPageLoader extends Controller
{
    public $slider_file_path='storage/Main_images/Sliders/';
    public $product_samples_path='storage/Main_images/ProductSamples/';
    public $product_introductions_path='storage/Main_images/ProductIntroduction/';
    public $product_Advantages_path='storage/Main_images/ProductAdvantages/';
    public $galleries_path='storage/Main_images/Gallery/';
    public $catalogs_path='storage/Main_images/Catalog/';

    public function dashboard(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='داشبورد';
        $Page='';
        return view('dashboard.Page',compact('Name','Page'));
    }

    public function indexPageSlider(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='اسلایدر';
        $FormSubmitRoute='indexPageSliderSave';

//        read slider from db
        $Sliders = Slider::with('contents')->get();
        $SL = [];

        foreach ($Sliders as $key => $item) {
            $SL[$item->id]['content'] = $item->contents()->where('locale', 'FA')->pluck('element_content')[0];
            $SL[$item->id]['image'] =asset($this->slider_file_path. $item->slider_image);

        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute', 'SL'));
    }


    public function indexPageAboutUs(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='درباره ما';
        $FormSubmitRoute='indexPageAboutUsSave';
        $selectedItem=[];
        $currtentItem=aboutUs::with('contents')->find(1);
        if($currtentItem){
            foreach (SiteLang() as $locale => $specs) {
                $selectedItem[$locale] = $currtentItem->contents->where('locale', $locale)->where('element_id', $currtentItem->id)->pluck('element_content')[0];

            }


        }
        return view('dashboard.Page',compact('Name','Page','selectedItem','FormSubmitRoute'));
    }

    public function productSamplesPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='نمونه محصولات';
        $FormSubmitRoute='indexPageProductSamplesSave';

        //        read product samples from db
        $ProductSamples = ProductSample::with('contents')->get();
        $PS = [];

        foreach ($ProductSamples as $key => $item) {
            $PS[$item->id]['content'] = $item->contents()->where('locale', 'FA')->pluck('element_content')[0];
            $PS[$item->id]['image'] =asset($this->product_samples_path. $item->image_name);

        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute','PS'));
    }




    public function indexPageProductIntroduction(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='معرفی محصولات';
        $FormSubmitRoute='productIntroductionSave';

//        read data from db
        $product_introductions = ProductIntroduction::with('contents')->get();
        $PI = [];

        foreach ($product_introductions as $key => $item) {
            $PI[$item->id]['content'] = $item->contents()->where('locale', 'FA')->where('element_title', 'title_FA')->pluck('element_content')[0];
            $PI[$item->id]['image'] =asset($this->product_introductions_path. $item->image);

        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute', 'PI'));
    }



    public function indexPageProductAdvantages(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='مزایای محصول';
        $FormSubmitRoute='productAdvantagesSave';

//        read data from db
        $product_Advantages = ProductAdvantage::with('contents')->get();
        $PA = [];

        foreach ($product_Advantages as $key => $item) {
            $PA[$item->id]['content'] = $item->contents()->where('locale', 'FA')->where('element_title', 'ProductAdvantages_FA')->pluck('element_content')[0];
            $PA[$item->id]['image'] =asset($this->product_Advantages_path. $item->image);

        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute', 'PA'));
    }





    public function indexPageGallery(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='گالری تصاویر';
        $FormSubmitRoute='gallerySave';

//        read data from db
        $galleries = Gallery::all();
        $Gallery = [];

        foreach ($galleries as $key => $item) {
            $Gallery[$item->id]['content'] = $item->contents()->where('locale', 'FA')->where('element_title', 'title_FA')->pluck('element_content')[0];
            try {
                $files = File::allFiles($this->galleries_path . $item->id);
                foreach ($files as $file) {
                    $Gallery[$item->id]['image'][] =asset($this->galleries_path. $item->id.'\\'.$file->getFilename());

                }
            }
            catch (\Exception $exception){
                $files=[];
            }

        }

        return view('dashboard.Page',compact('Name','Page','FormSubmitRoute', 'Gallery'));
    }





    public function indexPageCatalog(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='کاتالوگ';
        $FormSubmitRoute='catalogSave';

        $catalogs=[];
        $files = File::allFiles($this->catalogs_path)? File::allFiles($this->catalogs_path) : [];

        if($files){
            foreach ($files as $id=>$file){
                $catalogs[]['image']=asset($this->catalogs_path.$file->getFilename());
            }
        }
        return view('dashboard.Page',compact('Name','Page', 'FormSubmitRoute','catalogs'));
    }




    public function blogPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='وبلاگ';
        $FormSubmitRoute='blogSave';

        //        read tags from db
        $tags = Tag::all();
        $Tag = [];

        foreach ($tags as $key => $item) {
            $Tag[$item->id] = $item->contents()->where('locale', 'FA')->where('element_title', 'tag')->pluck('element_content')[0];
        }
        return view('dashboard.Page',compact('Name','Page','Tag', 'FormSubmitRoute'));
    }

    public function tags(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='برچسب ها';
        $FormSubmitRoute='tagSave';

        //        read data from db
        $tags = Tag::all();
        $Tag = [];

        foreach ($tags as $key => $item) {
            $Tag[$item->id]['content'] = $item->contents()->where('locale', 'FA')->where('element_title', 'tag')->pluck('element_content')[0];
        }

        return view('dashboard.Page',compact('Name','Page', 'FormSubmitRoute','Tag'));
    }




    public function usagePage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        //usageGreenhousePage گلخانه
        //usagePoultryFarmPage مرغداری ها
        //usagePowerPlantPage نیروگاه ها
        $Name='صفحات';
        $Page='کاربردها';
        return view('dashboard.Page',compact('Name','Page'));
    }

    public function contactUsPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $Name='صفحات';
        $Page='تماس با ما';
        return view('dashboard.Page',compact('Name','Page'));
    }


 public function editItem(string $selectedPage, string $p, string $selectedSection, int $selectedItemId): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
//dd($selectedPage, $selectedSection, $selectedItemId, $p);
        $Name='صفحات';
        $Page='ویرایش آیتم';
     $FormSubmitRoute='';
//        should be fixed


        $selectedItem=[];
        switch ($selectedSection) {
//            depends on the page that user is currently visiting
            case 'slider':
                $selectedSlider=Slider::where('id',$selectedItemId)->with('contents')->first();
                $selectedItem['itemImage']=asset($this->slider_file_path. $selectedSlider->slider_image);
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selectedSlider->contents->where('locale', $locale)->pluck('element_content')[0];
                }
                $FormSubmitRoute='indexPageSliderUpdate';

            break;

            case 'productSamples':
                $selectedProduct=ProductSample::where('id',$selectedItemId)->with('contents')->first();
                $selectedItem['itemImage']=asset($this->product_samples_path. $selectedProduct->image_name);
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selectedProduct->contents->where('locale', $locale)->pluck('element_content')[0];
                }
                $FormSubmitRoute='indexPageProductSampleUpdate';
            break;

            case 'ProductIntroduction':
                $selected=ProductIntroduction::where('id',$selectedItemId)->with('contents')->first();
                $selectedItem['itemImage']=asset($this->product_introductions_path. $selected->image);
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selected->contents->where('locale', $locale)->where('element_title', 'title_'.$locale)->pluck('element_content')[0]. $selected->contents->where('locale', $locale)->where('element_title', 'content_'.$locale)->pluck('element_content')[0];
                }
                $FormSubmitRoute='indexPageProductIntroductionUpdate';
            break;

            case 'ProductAdvantages':
                $selected=ProductAdvantage::where('id',$selectedItemId)->with('contents')->first();

                $selectedItem['itemImage']=asset($this->product_Advantages_path. $selected->image);
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selected->contents->where('locale', $locale)->where('element_title', 'ProductAdvantages_'.$locale)->pluck('element_content')[0];
                }
                $FormSubmitRoute='indexPageProductAdvantagesUpdate';
            break;

            case 'gallery':
                $selected=Gallery::where('id',$selectedItemId)->with('contents')->first();
                try {

                $files = File::allFiles($this->galleries_path. $selectedItemId);
                foreach ($files as $file) {
                    $selectedItem['itemImage'][]=asset($this->galleries_path. $selectedItemId .'\\'.$file->getFilename());

                }
                }
                catch (\Exception $exception){
                    $selectedItem['itemImage']='';
                }
                foreach (SiteLang() as $locale => $specs) {
                    $selectedItem[$locale] = $selected->contents->where('section','gallery')->where('locale', $locale)->where('element_title', 'title_'.$locale)->pluck('element_content')[0];
                }

                $FormSubmitRoute='indexPageGalleryUpdate';
            break;


         case 'tag':
             $selected=Tag::where('id',$selectedItemId)->with('contents')->first();

             foreach (SiteLang() as $locale => $specs) {
                 $selectedItem[$locale] = $selected->contents->where('locale', $locale)->where('element_title', 'tag')->pluck('element_content')[0];
             }
             $FormSubmitRoute='TagUpdate';
             break;
        }



        return view('dashboard.Page',compact('Name','Page','p','selectedSection','selectedItemId','FormSubmitRoute','selectedItem'));
    }

}
