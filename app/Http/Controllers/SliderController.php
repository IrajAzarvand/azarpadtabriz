<?php

namespace App\Http\Controllers;

use App\Models\LocaleContents;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
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

//        $Contents = [];
//        $contents=LocaleContents::all();
//        $Contents = LocaleContents::where([
//            'page' => 'index',
//            'section' => 'slider',
//            'element_title' => '',
//        ])->count($column)->get();

//        save file to slider folder and add row to DB
        $uploaded = $request->file('file');
        $uploaded->storeAs('Main_images\Sliders\\', $uploaded->getClientOriginalName());
        $new_slider=Slider::create(['slider_image' => $uploaded->getClientOriginalName()]);
//        $new_slider->save();


        $Contents = [];
        // add new slider texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $Contents = LocaleContents::firstOrNew(
                [
                    'page' => 'index',
                    'section' => 'slider',
                    'element_title' => 'SliderText',
                    'element_id' => $new_slider->id,
                    'locale' => $locale,
                    'element_content' => $request->input('content_' . $locale),
                ]
            );
            $Contents->save();
        }
//
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }

}
