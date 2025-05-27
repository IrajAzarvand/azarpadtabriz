<?php

namespace App\Http\Controllers;

use App\Models\BlogComments;
use Illuminate\Http\Request;

class BlogCommentsController extends Controller
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


        $newComment = new BlogComments;
        $newComment->blog_id=$request->input('blogId');
        $newComment->name=$request->input('name');
        $newComment->email=$request->input('email');
        $newComment->comment=$request->input('Message');
        $newComment->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogComments $blogComments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogComments $blogComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogComments $blogComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogComments $blogComments)
    {
        //
    }
}
