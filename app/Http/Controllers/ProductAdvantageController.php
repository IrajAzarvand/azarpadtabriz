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
                    'element_title' => 'ProductAdvantages',
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductAdvantage $productAdvantage)
    {
        //
    }
}
