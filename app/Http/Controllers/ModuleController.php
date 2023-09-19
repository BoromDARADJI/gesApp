<?php

namespace App\Http\Controllers;

use App\Models\module;
use App\Models\niveau;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $modules = Module::all();
        return view('modules.module',compact('modules'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $niveaux = niveau::all();

        return view('modules.ajouter_module' ,compact('niveaux'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $module = new module() ;
     $module->libelles =$request->libelles;
     $module->duree =$request->duree;
     $module->montant =$request->montant;
     $module->id_niveau =$request->id_niveau;
     $module->save();
      return redirect('/ajouter_module')->with('status',"LE MODULE à  bien éte ajouter avec succes");
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(module $module)
    {
        
        $module= module::find($module->id);
        return view('modules.detail_module', compact('module'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(module $module)
    {
        
       $module= module::find($module->id);
       return view('modules.editer_module', compact('module'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, module $module)
    {
        
       
     $module->libelles =$request->libelles;
     $module->duree =$request->duree;
     $module->montant =$request->montant;
     $module->save();
      return redirect('/module');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(module $module)
    {

        $module->delete();
        return redirect('/module');
        //
    }
}
