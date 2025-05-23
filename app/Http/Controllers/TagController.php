<?php

namespace App\Http\Controllers;

use App\Models\LocaleContents;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
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
        //add contents to DB
        $tag = new Tag;
        $tag->save();
        $Contents = [];
        // add new slider texts to locale contents
        foreach (SiteLang() as $locale => $specs) {
            $Contents = LocaleContents::updateOrCreate(
                [
                    'page' => 'blog',
                    'section' => 'tag',
                    'element_title' => 'tag',
                    'element_id' => $tag->id,
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
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $selectedItem = Tag::with('contents')->find($request->input('editedItemId'));
        foreach (SiteLang() as $locale => $specs) {
            $selectedItem->contents()->updateOrCreate(
                [
                    'page' => 'blog',
                    'section' => 'tag',
                    'element_title' => 'tag',
                    'element_id' => $selectedItem->id,
                    'locale' => $locale,],
                [
                    'element_content' => $request->input('content_' . $locale),
                ]
            );
        }

        return redirect()->route('blogTags');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $tag)
    {
        $selected_item=Tag::with('contents')->find($tag);
        $selected_item->contents()->delete();
        $selected_item->delete();
        return redirect()->back();
    }
}
