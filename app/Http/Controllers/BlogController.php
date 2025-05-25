<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\LocaleContents;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blogs_path='storage/Main_images/Blog/';


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

        if ($request->input('content_FA') == null) {
        return back();
    }
        $newBlogPost = new blog;
//        save file to blog folder and add row to DB
        if ($request->file('file')){
        $uploaded = $request->file('file')[0];

            $uploaded->storeAs('Main_images\Blog\\', $uploaded->getClientOriginalName());
            $newBlogPost->image= $uploaded->getClientOriginalName();
        }

        //add tags to new created blog post
        if($request->tags){
            $newBlogPost->tags=$request->tags;
        }
        $newBlogPost->save();


        //devide the text into (header and content), then save to DB
        $Contents = [];
        // add new slider texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $Contents[0]=null;
            $Contents[1]=null;
            if($request->input('content_' . $locale)) {
                $Contents = explode("\n", $request->input('content_' . $locale), 2);
            }

            $newBlogPost->contents()->saveMany([
                new LocaleContents([
                    'page' => 'blog',
                    'section' => 'blog',
                    'element_title' => 'title_' . $locale,
                    'element_id' => $newBlogPost->id,
                    'locale' => $locale,
                    'element_content' => $Contents[0],
                ]),

                new LocaleContents([
                    'page' => 'blog',
                    'section' => 'blog',
                    'element_title' => 'content_' . $locale,
                    'element_id' => $newBlogPost->id,
                    'locale' => $locale,
                    'element_content' => $Contents[1],
                ]),
            ]);

        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $blog)
    {
        $selected_item=blog::with('contents')->find($blog);
        try {

            unlink($this->blogs_path . $selected_item->image);
        }
        catch (\Throwable $e)
        {

        }
        $selected_item->contents()->delete();
        $selected_item->delete();
        return redirect()->back();
    }

    public function removeImage(int $blog): true|\Illuminate\Http\RedirectResponse
    {
        $selected_item=blog::with('contents')->find($blog);
        try {

            unlink($this->blogs_path . $selected_item->image);

        }
        catch (\Throwable $e)
        {
            return true;
        }
        return redirect()->back();
    }
}
