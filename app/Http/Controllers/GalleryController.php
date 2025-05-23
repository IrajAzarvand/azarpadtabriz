<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\LocaleContents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public $galleries_path='storage/Main_images/Gallery/';

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

        $newGallery = new Gallery;
        $newGallery->save();
//        save files to product introduction folder and add row to DB
        $uploaded = $request->file('file');
        if($uploaded){
            foreach ($uploaded as $fle) {

                $fle->storeAs('Main_images\Gallery\\'.$newGallery->id.'\\', $fle->getClientOriginalName());

            }
        }

        //add contents to DB
        $Contents = [];
        foreach (SiteLang() as $locale => $specs) {
            $Contents = LocaleContents::updateOrCreate(
                [
                    'page' => 'index',
                    'section' => 'gallery',
                    'element_title' => 'title_'.$locale,
                    'element_id' => $newGallery->id,
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
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $selectedItem = Gallery::with('contents')->find($request->input('editedItemId'));
        foreach (SiteLang() as $locale => $specs) {
            $selectedItem->contents()->updateOrCreate(
                [
                    'page' => 'index',
                    'section' => 'gallery',
                    'element_title' => 'title_' . $locale,
                    'element_id' => $selectedItem->id,
                    'locale' => $locale,
                ],
                [
                    'element_content' => $request->input('content_' . $locale),
                ]
            );

            //replace file if user select another one
            $uploaded = $request->file('file');
            if($uploaded){
                foreach ($uploaded as $fle) {

                    $fle->storeAs('Main_images\Gallery\\'.$selectedItem->id.'\\', $fle->getClientOriginalName());

                }
            }

        }

        return redirect()->route('GalleryPage');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $gallery)
    {
        $selected_item=Gallery::with('contents')->find($gallery);
        try {
        File::deleteDirectory($this->galleries_path . $gallery);

        }
        catch (\Throwable $e)
        {

        }

        $selected_item->contents()->delete();
        $selected_item->delete();
        return redirect()->back();
    }

    public function removeImage(int $id , string $img): true|\Illuminate\Http\RedirectResponse
    {

        try {
            unlink($this->galleries_path . $id . '/' . $img);
        }
        catch (\Throwable $e)
        {
            return true;
        }
        return redirect()->back();
    }
}
