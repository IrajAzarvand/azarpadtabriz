<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
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
        $NewMessage = new Message();
        $NewMessage->create($request->all());
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Name='صفحات';
        $Page='ویرایش آیتم';
        $FormSubmitRoute='messages';
        $selectedItemId=$id;
        $selected=Message::where('id',$selectedItemId)->first();
        foreach (SiteLang() as $locale => $specs) {
            $selectedItem[$locale] = nl2br(e('name= ' . $selected->name  . "\r\n" . 'email= ' . $selected->email . "\r\n" .  'subject= ' . $selected->subject . "\r\n" . 'message= ' . $selected->message));
        }


        return view('dashboard.Page',compact('Name','Page','selectedItemId','FormSubmitRoute','selectedItem'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $selected_item=Message::find($id);
        $selected_item->delete();
        return redirect()->back();
    }
}
