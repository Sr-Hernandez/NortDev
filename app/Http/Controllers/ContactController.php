<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\users;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacto_mensaje(Request $request)
    {
        $contacto = new contact;
        $contacto->name =  $request->input('name');
        $contacto->email =  $request->input('email');
        $contacto->phone1 =  $request->input('phone1');
        $contacto->mensaje =  $request->input('mensaje');
        $contacto->ip =  $request->ip();
        $contacto->save();


        // $user = new users;
        // $user->name = $request->input('name');
        // $user->user_email= $request->input('email');
        // $user->save();
        return view('index');
    }

    public function contacto_mensaje_cv(Request $request)
    {
        $contacto = new contact;
        $contacto->name =  $request->input('name');
        $contacto->email =  $request->input('email');
        $contacto->phone1 =  $request->input('phone1');
        $contacto->mensaje =  $request->input('mensaje');
        $contacto->ip =  $request->ip();
        $contacto->save();


       
        return redirect()->route('cv');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
