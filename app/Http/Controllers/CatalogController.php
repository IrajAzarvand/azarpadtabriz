<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
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
}
