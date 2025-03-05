<?php

namespace App\Http\Controllers;

use App\Models\LocaleContents;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use mysql_xdevapi\Exception;

class SliderController extends Controller
{
    public $slider_file_path='storage/Main_images/Sliders/';

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
        $selectedItem=Slider::with('contents')->find($request->input('editedItemId'));

        // Edit slider texts in locale contents
        foreach (SiteLang() as $locale => $specs) {
            $content = $selectedItem->contents()->where('locale', $locale)->get()[0];
            $content->element_content = $request->input('content_' . $locale);
            $content->save();
        }

        //replace slider file if user select another one
        $uploaded = $request->file('file');
        if($uploaded){
            $this->removeImage($request->input('editedItemId'));
            $uploaded->storeAs('Main_images\Sliders\\', $uploaded->getClientOriginalName());
            $selectedItem->slider_image = $uploaded->getClientOriginalName();
            $selectedItem->save();
        }

        return redirect()->route('indexPageSlider');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $slider)
    {
        $selected_slider=Slider::with('contents')->find($slider);
        try {

            unlink($this->slider_file_path . $selected_slider->slider_image);
        }
        catch (\Throwable $e)
        {

        }
        $selected_slider->contents()->delete();
        $selected_slider->delete();
       return redirect()->back();
    }

    public function removeImage(int $slider): true|\Illuminate\Http\RedirectResponse
    {
        $selected_slider=Slider::with('contents')->find($slider);
        try {

            unlink($this->slider_file_path . $selected_slider->slider_image);
        }
        catch (\Throwable $e)
        {
            return true;
        }
    return redirect()->back();
    }

}
