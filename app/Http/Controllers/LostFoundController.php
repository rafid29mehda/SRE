<?php

namespace App\Http\Controllers;

use App\Models\LostFound;
use Illuminate\Http\Request;

class LostFoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lostFounds= LostFound::all();
        return view('form.lost_found.index', compact('lostFounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.lost_found.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LostFound::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'sid'=>$request->sid,
            'department'=>$request->department,
            'type'=>$request->type,
            'color'=>$request->color,
            'location'=>$request->location,
            'date'=>$request->date,
            'comments'=>$request->comments
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LostFound  $lostFound
     * @return \Illuminate\Http\Response
     */
    public function show(LostFound $lostFound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LostFound  $lostFound
     * @return \Illuminate\Http\Response
     */
    public function edit(LostFound $lostFound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LostFound  $lostFound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LostFound $lostFound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LostFound  $lostFound
     * @return \Illuminate\Http\Response
     */
    public function destroy(LostFound $lostFound)
    {
        //
    }
}
