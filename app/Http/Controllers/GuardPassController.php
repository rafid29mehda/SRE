<?php

namespace App\Http\Controllers;

use App\Models\GuardPass;
use Illuminate\Http\Request;

class GuardPassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guardPasses = GuardPass::all();

        return view('form.guard_pass.index', compact('guardPasses'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.guard_pass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GuardPass::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'nid'=>$request->nid,
            'department'=>$request->department,
            'location'=>$request->location,
            'date'=>$request->date,
            'purpose'=>$request->purpose
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuardPass  $guardPass
     * @return \Illuminate\Http\Response
     */
    public function show(GuardPass $guardPass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuardPass  $guardPass
     * @return \Illuminate\Http\Response
     */
    public function edit(GuardPass $guardPass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuardPass  $guardPass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuardPass $guardPass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuardPass  $guardPass
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuardPass $guardPass)
    {
        //
    }
}
