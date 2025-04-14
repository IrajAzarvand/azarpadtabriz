<?php

namespace App\Http\Controllers;

use App\Models\LocaleContents;
use App\Models\ProductSample;
use Illuminate\Http\Request;

class ProductSampleController extends Controller
{
    public $product_samples_path='storage/Main_images/ProductSamples/';

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

        $uploaded[0]->storeAs('Main_images\ProductSamples\\', $uploaded[0]->getClientOriginalName());
        $new_ps=ProductSample::create(['image_name' => $uploaded[0]->getClientOriginalName()]);


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
        $selectedItem=ProductSample::with('contents')->find($request->input('editedItemId'));

        // Edit texts in locale contents
        foreach (SiteLang() as $locale => $specs) {
            $content = $selectedItem->contents()->where('locale', $locale)->get()[0];
            $content->element_content = $request->input('content_' . $locale);
            $content->save();
        }

        //replace file if user select another one
        $uploaded = $request->file('file');
        if($uploaded){
            $this->removeImage($request->input('editedItemId'));
            $uploaded[0]->storeAs('Main_images\ProductSamples\\', $uploaded[0]->getClientOriginalName());
            $selectedItem->image_name = $uploaded[0]->getClientOriginalName();
            $selectedItem->save();
        }

        return redirect()->route('productSamplesPage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $productSample)
    {
        $selected_item=ProductSample::with('contents')->find($productSample);
        try {

            unlink($this->product_samples_path . $selected_item->image_name);
        }
        catch (\Throwable $e)
        {

        }
        $selected_item->contents()->delete();
        $selected_item->delete();
        return redirect()->back();
    }

    public function removeImage(int $productSample): true|\Illuminate\Http\RedirectResponse
    {
        $selected_item=ProductSample::with('contents')->find($productSample);
        try {

            unlink($this->product_samples_path . $selected_item->image_name);

        }
        catch (\Throwable $e)
        {
            return true;
        }
        return redirect()->back();
    }
}
