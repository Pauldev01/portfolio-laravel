<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Aboutmeli;
use App\Models\Navbar;
use App\Models\Welcome;
use App\Models\Welcomeadmn;
use Illuminate\Http\Request;

class WelcomeadmnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $welcomeadmn=Welcomeadmn::all();
        $DBNav = Navbar::all();
        $DBwelcome = Welcome::all();
        $DBaboutme = Aboutme::all();
        return view('welcomeadmn', compact('welcomeadmn','DBNav','DBwelcome','DBaboutme'));
    }

    //destroy

    public function destroyNav($id){
        $destroy = Navbar::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyWelcome($id){
        $destroy = Welcome::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    //edit + update
    public function editNav($id){
        $edit = Navbar::find($id);        
        return view ("admin.editnavbar", compact('edit'));
    }
    public function updateNav(Request $request, $id){
        $validation = $request->validate([
            "logo" => "required",
            "home" => "required",
            "aboutme" => "required",
            "creation" => "required",
            "competence" => "required",
            "contact" => "required",
            "backoffice" => "required"
        ]);
        $update = Navbar::find($id);
        $update->logo = $request->logo;
        $update->home = $request->home;
        $update->aboutme = $request->aboutme;
        $update->creation = $request->creation;
        $update->competence = $request->competence;
        $update->contact = $request->contact;
        $update->backoffice = $request->backoffice;
        $update->save();
        return redirect('/');
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
     * @param  \App\Models\Welcomeadmn  $welcomeadmn
     * @return \Illuminate\Http\Response
     */
    public function show(Welcomeadmn $welcomeadmn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcomeadmn  $welcomeadmn
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcomeadmn $welcomeadmn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcomeadmn  $welcomeadmn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcomeadmn $welcomeadmn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcomeadmn  $welcomeadmn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcomeadmn $welcomeadmn)
    {
        //
    }
}
