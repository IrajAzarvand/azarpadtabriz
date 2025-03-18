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

            $Contents = LocaleContents::create(
                [
                    'page' => 'index',
                    'section' => 'productIntroduction',
                    'element_title' => 'title_' . $locale,
                    'element_id' => $newProductIntroduction->id,
                    'locale' => $locale,
                    'element_content' => $data[0],
                ],
                [
                    'page' => 'index',
                    'section' => 'productIntroduction',
                    'element_title' => 'content_' . $locale,
                    'element_id' => $newProductIntroduction->id,
                    'locale' => $locale,
                    'element_content' => $data[1],
                ]
            );
//            $Contents->save();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductIntroduction $productIntroduction)
    {
        //
    }
}
