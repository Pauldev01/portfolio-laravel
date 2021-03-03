<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Navbar;
use App\Models\Aboutmeli;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutme=Aboutme::all();
        $aboutmeli=Aboutmeli::all();
        $navbar=Navbar::all();
        return view('aboutme', compact('aboutme', 'aboutmeli', 'navbar'));
        
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
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutme $aboutme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutme $aboutme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutme $aboutme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutme $aboutme)
    {
        //
    }
}
