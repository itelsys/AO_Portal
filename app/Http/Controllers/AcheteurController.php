<?php

namespace App\Http\Controllers;

use App\Acheteur;
use Illuminate\Http\Request;

class AcheteurController extends Controller
{
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
        return view('acheteur.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate(request(), [
            'ach' => 'required',
            
        ]);
        $ach = request('ach');
       
        Acheteur::insert([
            ['nom_ach' => request('ach')]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acheteur  $acheteur
     * @return \Illuminate\Http\Response
     */
    public function show(Acheteur $acheteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acheteur  $acheteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Acheteur $acheteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acheteur  $acheteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acheteur $acheteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acheteur  $acheteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acheteur $acheteur)
    {
        //
    }
}
