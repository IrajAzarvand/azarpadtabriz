<?php

namespace App\Http\Controllers;

use App\Models\LocaleContents;
use App\Models\ProductIntroduction;
use Illuminate\Http\Request;

class ProductIntroductionController extends Controller
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
//        dd($request);
        $newProductIntroduction = new ProductIntroduction;
//        save file to product introduction folder and add row to DB
        $uploaded = $request->file('file');
        if($uploaded){

        $uploaded->storeAs('Main_images\ProductIntroduction\\', $uploaded->getClientOriginalName());
            $newProductIntroduction->image= $uploaded->getClientOriginalName();
        }
        $newProductIntroduction->save();


        //devide the text into (header and content), then save to DB
        $Contents = [];
        // add new slider texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $data= explode("\n", $request->input('content_' . $locale), 2);

            $newProductIntroduction->contents()->saveMany([
                new LocaleContents([
                    'page' => 'index',
                    'section' => 'productIntroduction',
                    'element_title' => 'title_' . $locale,
                    'element_id' => $newProductIntroduction->id,
                    'locale' => $locale,
                    'element_content' => $data[0],
                ]),

                new LocaleContents([
                    'page' => 'index',
                    'section' => 'productIntroduction',
                    'element_title' => 'content_' . $locale,
                    'element_id' => $newProductIntroduction->id,
                    'locale' => $locale,
                    'element_content' => $data[1],
                ]),
            ]);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductIntroduction $productIntroduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductIntroduction $productIntroduction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductIntroduction $productIntroduction)
    {
        $selectedItem=ProductIntroduction::with('contents')->find($request->input('editedItemId'));
dd($selectedItem,$request);
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
            $uploaded->storeAs('Main_images\ProductSamples\\', $uploaded->getClientOriginalName());
            $selectedItem->image_name = $uploaded->getClientOriginalName();
            $selectedItem->save();
        }

        return redirect()->route('productSamplesPage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductIntroduction $productIntroduction)
    {
        //
    }
}
