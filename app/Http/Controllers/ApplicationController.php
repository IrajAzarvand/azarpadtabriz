<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\LocaleContents;
use Illuminate\Http\Request;

class ApplicationController extends Controller
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
        $newApplication=new Application;
        $newApplication->save();
//        save file to product introduction folder and add row to DB
        $uploaded = $request->file('file');
        if($uploaded){

            $uploaded[0]->storeAs('Main_images\applications\\'.$newApplication->id.'\\', $uploaded[0]->getClientOriginalName());
        }


        //devide the text into (header and content), then save to DB
        $Contents = [];
        // add new slider texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $Contents[0]=null;
            $Contents[1]=null;
            $Contents[2]=null;
            if($request->input('content_' . $locale)) {
                $Contents = explode("\n", $request->input('content_' . $locale), 3);
            }

            $newApplication->contents()->saveMany([
                new LocaleContents([
                    'page' => 'applications',
                    'section' => 'applications',
                    'element_title' => 'title1_' . $locale,
                    'element_id' => $newApplication->id,
                    'locale' => $locale,
                    'element_content' => $Contents[0],
                ]),

                  new LocaleContents([
                    'page' => 'applications',
                    'section' => 'applications',
                    'element_title' => 'title2_' . $locale,
                    'element_id' => $newApplication->id,
                    'locale' => $locale,
                    'element_content' => $Contents[1],
                ]),

                  new LocaleContents([
                    'page' => 'applications',
                    'section' => 'applications',
                    'element_title' => 'content_' . $locale,
                    'element_id' => $newApplication->id,
                    'locale' => $locale,
                    'element_content' => $Contents[2],
                ]),


            ]);

        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
