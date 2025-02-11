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
        $uploaded = $request->file('file');

        $uploaded->storeAs('Main_images\Sliders\\', $uploaded->getClientOriginalName());
//
        $Contents = [];
//        // add new slider texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $Contents = LocaleContents::firstOrNew(
                [
                    'page' => 'sliders',
                    'section' => 'sliders',
                    'element_title' => 'PtypeText',
                    'element_id' => $NewPtype->id,
                    'locale' => $locale,
                    'element_content' => $request->input('content_' . $locale),
                ]
            );
            $Contents->save();
        }
//
        return redirect()->back();
        dd($request, $uploaded);
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
