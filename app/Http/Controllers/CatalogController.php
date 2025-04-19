<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public $catalogs_path='storage/Main_images/Catalog/';

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        save files to product introduction folder and add row to DB
        $uploaded = $request->file('file');
        if($uploaded){
            foreach ($uploaded as $fle) {

                $fle->storeAs('Main_images\Catalog\\'. $fle->getClientOriginalName());

            }
        }
        return redirect()->back();
    }


    public function removeCatalog(string $filename): true|\Illuminate\Http\RedirectResponse
    {

        try {
            unlink($this->catalogs_path . $filename);
        }
        catch (\Throwable $e)
        {
            return true;
        }
        return redirect()->back();
    }

}
