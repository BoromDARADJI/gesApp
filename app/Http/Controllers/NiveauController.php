<?php

namespace App\Http\Controllers;

use App\Models\niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $niveaux = Niveau::all();
        return view('niv_etudes.niv_etude',compact('niveaux'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('niv_etudes.ajouter_niv');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
      $niveau = new niveau() ;
      $niveau->libelles =$request->libelles;
      $niveau->save();
      return redirect('/ajouter')->with('status',"LE NIVEAU D'ETUDE à bien éte ajouter avec succes");
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(niveau $niveau)
    {
        $niveau = niveau::find($niveau->id);
        return view('niv_etudes.detail_niv', compact('niveau'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(niveau $niveau)
    {

        
       $niveau = niveau::find($niveau->id);
       return view('niv_etudes.editer_nivetude', compact('niveau'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, niveau $niveau)
    {

        $niveau->libelles =$request->libelles;
        $niveau->save();
        return redirect('/niv_etude');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(niveau $niveau)
    {

        $niveau->delete();
        return redirect('/niv_etude');
        //
    }
}
