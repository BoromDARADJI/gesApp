<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;
use App\Http\Requests\apprenantRequest;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apprenants = Apprenant::all();
        return view('apprenants.apprenant',compact('apprenants'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('apprenants.ajouter_app');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(apprenantRequest $request)
    {
      
      $apprenant = new apprenant() ;
      $apprenant->nom =$request->nom; 
      $apprenant->prenom =$request->prenom;
      $apprenant->addresse =$request->addresse;
      $apprenant->telephone =$request->telephone;
      $apprenant->save();
      return redirect('/ajouapp')->with('status',"L 'etudiant à  bien éte ajouter avec succes");
       //
    }

    /**
     * Display the specified resource.
     */
    public function show(Apprenant $apprenant)
    {
        $apprenant = apprenant::find($apprenant->id);
        return view('apprenants.detail_app', compact('apprenant'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apprenant $apprenant)
    {
       
       $apprenant = apprenant::find($apprenant->id);
       return view('apprenants.editer_app', compact('apprenant'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apprenant $apprenant)
    {

        $apprenant->nom =$request->nom;
        $apprenant->prenom =$request->prenom;
        $apprenant->addresse =$request->addresse;
        $apprenant->telephone =$request->telephone;
        $apprenant->save();
        return redirect('/apprenant');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apprenant $apprenant)
    {
        
        $apprenant->delete();
        return redirect('/apprenant');
    //
    }
}
