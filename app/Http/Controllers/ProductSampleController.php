<?php

namespace App\Http\Controllers;

use App\Models\LocaleContents;
use App\Models\ProductSample;
use Illuminate\Http\Request;

class ProductSampleController extends Controller
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

//        save file to product samples folder and add row to DB
        $uploaded = $request->file('file');
        $uploaded->storeAs('Main_images\ProductSamples\\', $uploaded->getClientOriginalName());
        $new_ps=ProductSample::create(['image_name' => $uploaded->getClientOriginalName()]);


        $Contents = [];
        // add new product sample texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $Contents = LocaleContents::firstOrCreate(
                [
                    'page' => 'index',
                    'section' => 'product_samples',
                    'element_title' => 'product_sample_Text',
                    'element_id' => $new_ps->id,
                    'locale' => $locale,
                    'element_content' => $request->input('content_' . $locale),
                ]
            );
        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductSample $productSample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductSample $productSample)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductSample $productSample)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductSample $productSample)
    {
        //
    }
}
