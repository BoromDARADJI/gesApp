<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $payments =payment::all();
      return view('payments.payment',compact('payments'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payments.ajouter_payment');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment = new payment();
        $payment->mois =$request->mois;
        $payment->save();
        return redirect('/ajouter_payment')->with('status','le payment à bien été ajouter avec succes');


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(payment $payment)
    {
        //
    }
}
