<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\blog;
use App\Models\BlogComments;
use App\Models\Gallery;
use App\Models\ProductAdvantage;
use App\Models\ProductIntroduction;
use App\Models\ProductSample;
use App\Models\Slider;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use persian_date;

class MainWebsitePageLoaderController extends Controller
{

    public $slider_path='storage/Main_images/Sliders/';
    public $aboutus_path='storage/Main_images/AboutUs/';
    public $product_samples_path='storage/Main_images/ProductSamples/';
    public $product_introductions_path='storage/Main_images/ProductIntroduction/';
    public $product_Advantages_path='storage/Main_images/ProductAdvantages/';
    public $galleries_path='storage/Main_images/Gallery/';
    public $catalogs_path='storage/Main_images/Catalog/';
    public $blogs_path='storage/Main_images/Blog/';





    //set website locale to user selected
    public function SetLocale(string $langsymbol)
    {

        $NeedDirection = ['index']; //pages that needs ?dir=... at the end of address bar
        $prev_url = url()->previous();
        $SpecialAddress = false; //pretend that the current address dont need ?dir for default

        foreach ($NeedDirection as $page) {
            $SpecialAddress = Str::contains($prev_url, $NeedDirection);

            if ($SpecialAddress) {
                break;
            }
        }

        $TrimmedUrl = trim($prev_url, '?dir=rtl');
        $RawUrl = trim($TrimmedUrl, '?dir=ltr');

        Session::put('locale', $langsymbol);

        App::SetLocale($langsymbol);

        $SiteLang = SiteLang();

        if ($SpecialAddress) {
            if ($SiteLang[$langsymbol]['rtl']) {
                return redirect($RawUrl . '?dir=rtl');
            } else {
                return redirect($RawUrl . '?dir=ltr');
            }
        } else {
            return redirect($RawUrl);
        }
    }



    //Main Website
    public function IndexPage()
    {

//  ============================================      Slider Section
        $sliders=Slider::with('contents')->get();

        $SL=[];
        foreach ($sliders as $slider) {
            foreach (SiteLang() as $locale => $specs) {
                    $SL[$slider->id][$locale] = $slider->contents->where('locale', $locale)->where('element_id', $slider->id)->pluck('element_content')[0];
                }
                    $SL[$slider->id]['img']=$this->slider_path.$slider->slider_image;
        }

//  ============================================      About Us Section
        try {
            $aboutus = aboutUs::with('contents')->get()[0];
            if ($aboutus) {
                foreach (SiteLang() as $locale => $specs) {
                    $about_us[$locale] = $aboutus->contents->where('locale', $locale)->where('element_id', $aboutus->id)->pluck('element_content')[0];
                }
            }
            $filename = File::allFiles($this->aboutus_path)[0]->getFilename();
            $about_us['img'] = $this->aboutus_path . $filename;
        }
        catch (\Exception $exception){
            foreach (SiteLang() as $locale => $specs) {
                $about_us[$locale] = '';
                $about_us['img'] = '';
            }
        }

//  ============================================      product samples Section
        $productSamples=ProductSample::with('contents')->get();

        $PS=[];
        foreach ($productSamples as $productSample) {
            foreach (SiteLang() as $locale => $specs) {
                $PS[$productSample->id][$locale] = $productSample->contents->where('locale', $locale)->where('element_id', $productSample->id)->pluck('element_content')[0];
            }
            $PS[$productSample->id]['img']=$this->product_samples_path.$productSample->image_name;
        }

//  ============================================      product introduction Section
        $productIntroductions=ProductIntroduction::with('contents')->get();
        $PI=[];
        foreach ($productIntroductions as $productIntroduction) {
            foreach (SiteLang() as $locale => $specs) {
                $PI[$productIntroduction->id]['title'][$locale] = $productIntroduction->contents->where('locale', $locale)->where('element_id', $productIntroduction->id)->where('element_title', 'title_'.$locale)->pluck('element_content')[0];
                $PI[$productIntroduction->id]['content'][$locale] = $productIntroduction->contents->where('locale', $locale)->where('element_id', $productIntroduction->id)->where('element_title', 'content_'.$locale)->pluck('element_content')[0];
            }
            $PI[$productIntroduction->id]['img']=$this->product_introductions_path.$productIntroduction->image;
        }


//  ============================================      product advantages Section
        $productAdvantages=ProductAdvantage::with('contents')->get();
        $PA=[];
        $data=[];
        $content=[];
        foreach ($productAdvantages as $productAdvantage) {

            foreach (SiteLang() as $locale => $specs) {
                $data[$locale] = $productAdvantage->contents->where('locale', $locale)->where('element_id', $productAdvantage->id)->where('element_title', 'ProductAdvantages_'.$locale)->pluck('element_content')[0];
            }
//            $PA[$productIntroduction->id]['img']=$this->product_Advantages_path.$productAdvantage->image;
        }

        //devide each row of each lang to separate item
        foreach ($data as $lang=>$datum){
                $content[$lang]= explode("\n", $datum);

        }

        //devide each item of content to 2 piece and extract number from it
        foreach ($content as $locale=>$data){
            foreach ($data as $id=>$dt){
                if($locale==app()->getLocale()){
                $PA[$id]['percent'][$locale]= preg_replace('/[^0-9]/','',$dt);
                $PA[$id]['text'][$locale]= preg_replace('/[0-9]+/', '', $dt);
                }
            }
        }


//  ============================================      gallery Section
        $galleries=[];
        try {
            $Galleries = Gallery::with('contents')->get();
            if ($Galleries) {
                foreach ($Galleries as $gallery) {
                    foreach (SiteLang() as $locale => $specs) {
                        if ($locale == app()->getLocale()) {
                            $galleries[$gallery->id]['title'] = $gallery->contents->where('locale', $locale)->where('element_id', $gallery->id)->pluck('element_content')[0];
                        }
                    }
                    foreach (File::allFiles($this->galleries_path.$gallery->id) as $file) {

                $galleries[$gallery->id]['images'][] = asset($this->galleries_path. $gallery->id . '\\' . $file->getFilename()) ;
                    }
                }


            }

        }
        catch (\Exception $exception){
            foreach (SiteLang() as $locale => $specs) {
                $galleries[$locale] = '';
                $galleries['images'] = '';
            }
        }

//  ============================================

//  ============================================      catalog Section
        $catalogs=[];
        $files = File::allFiles($this->catalogs_path)? File::allFiles($this->catalogs_path) : [];
        if($files){
            foreach ($files as $id=>$file){
                $catalogs[]['image']=asset($this->catalogs_path.$file->getFilename());
            }
        }


//  ============================================



        return view('welcome', compact('SL','about_us','PS','PI','PA','galleries', 'catalogs'));
    }

    public function download_catalog(string $filename)
    {
        return response()->download($filename);
    }


    public function CU(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('contactUs');

    }

    public function BlogPage()
    {

        $Tags=Tag::with('contents')->get();
        $tagList=[];
        foreach ($Tags as $Tag) {
            foreach (SiteLang() as $locale => $specs) {
                $tagList[$locale][] = $Tag->contents->where('locale', $locale)->where('element_id', $Tag->id)->where('element_title', 'tag')->pluck('element_content')[0];
            }
        }

        $Blogs=blog::with('contents','comments')->get()->reverse();
        $BlogList=[];
        $persian = new persian_date();


        foreach ($Blogs as $Blog) {
            foreach (SiteLang() as $locale => $specs) {
                $BlogList[$Blog->id]['id'] = $Blog->id;
                $BlogList[$Blog->id]['title'][$locale] = $Blog->contents->where('locale', $locale)->where('element_id', $Blog->id)->where('element_title', 'title_'.$locale)->pluck('element_content')[0];
                $BlogList[$Blog->id]['content'][$locale] = Str::words($Blog->contents->where('locale', $locale)->where('element_id', $Blog->id)->where('element_title', 'content_'.$locale)->pluck('element_content')[0],15);
                //convert date to jalali
                $BlogList[$Blog->id]['date'] = persian()->to_date(Carbon::parse($Blog->created_at->format('Y/m/d'))->format('Y/m/d'), 'Y/m/d');
            }
            $BlogList[$Blog->id]['img']=$this->blogs_path.$Blog->image;
               $BlogList[$Blog->id]['CommentsCount'] = $Blog->comments()->count();
        }
        $BlogList? $RecentBlogs=array_chunk($BlogList,3)[0] : $RecentBlogs=[];

        return view('blog',compact('tagList', 'BlogList', 'RecentBlogs'));

    }

    public function showBlog(int $blogId)
    {
        $selectedBlog=blog::with('contents','comments')->find($blogId);
        $blogTags=[];
        if($selectedBlog->tags) {
            foreach ($selectedBlog->tags as $tag) {
                $blogTags[] = Tag::find($tag)->contents->where('element_id', $tag)->where('locale', app()->getLocale())->pluck('element_content')[0];
            }
        }
        $blogContents['title']=$selectedBlog->contents()->where('element_title', 'title_'.app()->getLocale())->pluck('element_content')[0];
        $blogContents['content']=$selectedBlog->contents()->where('element_title', 'content_'.app()->getLocale())->pluck('element_content')[0];
        $blogContents['date'] =persian()->to_date(Carbon::parse($selectedBlog->created_at->format('Y/m/d'))->format('Y/m/d'), 'Y/m/d');

        if($selectedBlog->image)
        {
            $blogContents['image']=$this->blogs_path.$selectedBlog->image;
        }
        $blogContents['CommentsCount'] = $selectedBlog->comments()->count();

        $blogContents['comments'] = $selectedBlog->comments()->pluck('comment','name')->toArray();

        return view('blog',compact('blogId','blogContents','blogTags'));

    }



}
