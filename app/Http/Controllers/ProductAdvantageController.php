<?php

namespace App\Http\Controllers;

use App\Models\LocaleContents;
use App\Models\ProductAdvantage;
use Illuminate\Http\Request;

class ProductAdvantageController extends Controller
{
    public $product_Advantages_path='storage/Main_images/ProductAdvantages/';

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

        $newProductAdvantage = new ProductAdvantage;
//        save file to product introduction folder and add row to DB
        $uploaded = $request->file('file');
        if($uploaded){

            $uploaded->storeAs('Main_images\ProductAdvantages\\', $uploaded->getClientOriginalName());
            $newProductAdvantage->image= $uploaded->getClientOriginalName();
        }
        $newProductAdvantage->save();


        $Contents = [];
        // add new product sample texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $Contents = LocaleContents::firstOrCreate(
                [
                    'page' => 'index',
                    'section' => 'ProductAdvantages',
                    'element_title' => 'ProductAdvantages_' . $locale,
                    'element_id' => $newProductAdvantage->id,
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
    public function show(ProductAdvantage $productAdvantage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductAdvantage $productAdvantage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductAdvantage $productAdvantage)
    {
        $selectedItem = ProductAdvantage::with('contents')->find($request->input('editedItemId'));
//dd('sel',$selectedItem, $request);
        foreach (SiteLang() as $locale => $specs) {
            $selectedItem->contents()->updateOrCreate(
                [
                    'page' => 'index',
                    'section' => 'ProductAdvantages',
                    'element_title' => 'ProductAdvantages_' . $locale,
                    'element_id' => $selectedItem->id,
                    'locale' => $locale,],
                    [
                    'element_content' => $request->input('content_' . $locale),
                    ]
            );

            //replace file if user select another one
            $uploaded = $request->file('file');
            if ($uploaded) {
                $this->removeImage($request->input('editedItemId'));
                $uploaded->storeAs('Main_images\ProductAdvantages\\', $uploaded->getClientOriginalName());
                $selectedItem->image = $uploaded->getClientOriginalName();
                $selectedItem->save();
            }

        }

        return redirect()->route('productAdvantagesPage');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $productAdvantage): \Illuminate\Http\RedirectResponse
    {
        $selected_item=ProductAdvantage::with('contents')->find($productAdvantage);
        try {

            unlink($this->product_Advantages_path . $selected_item->image);
        }
        catch (\Throwable $e)
        {

        }
        $selected_item->contents()->delete();
        $selected_item->delete();
        return redirect()->back();

    }

    public function removeImage(int $productAdvantage): true|\Illuminate\Http\RedirectResponse
    {
        $selected_item=ProductAdvantage::with('contents')->find($productAdvantage);
        try {

            unlink($this->product_Advantages_path . $selected_item->image);

        }
        catch (\Throwable $e)
        {
            return true;
        }
        return redirect()->back();
    }
}
