<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\LocaleContents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    public $aboutus_file_path='storage/Main_images/AboutUs/';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $uploaded = $request->file('file')[0];
        if($uploaded){
//remove previous file in about us directory
            try {

                File::cleanDirectory($this->aboutus_file_path);
            }
            catch (\Throwable $e)
            {
                return true;
            }

//save newly added file to storage
            $uploaded->storeAs('Main_images\AboutUs\\', $uploaded->getClientOriginalName());
        }


//add contents to DB
        $aboutus=aboutUs::firstOrCreate(['id' => 1]);
        $Contents = [];
        // add new slider texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $Contents = LocaleContents::updateOrCreate(
                [
                    'page' => 'index',
                    'section' => 'aboutus',
                    'element_title' => 'AboutUsText',
                    'element_id' => $aboutus->id,
                    'locale' => $locale
                    ],
                    ['element_content' => $request->input('content_' . $locale)]

            );
        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(aboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, aboutUs $aboutUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aboutUs $aboutUs)
    {
        //
    }
}
