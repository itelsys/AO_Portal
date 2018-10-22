<?php

namespace App\Http\Controllers;

use App\AO;
use Illuminate\Http\Request;
use Response;
use DB;
use App\Acheteur;

class AOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ao = DB::select("select * from version , a_o_s where version.id_ao = a_o_s.id");
        $uid =  DB::select("select id_user from abonnements");
        return view('AO.index', compact('ao','uid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $achs = Acheteur::all();
        return view("Create.index", compact('achs'));
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
            'reference' => 'required',
            'acheteur' => 'required',
        ]);

        $ref = request('reference');
        $ach = request('acheteur');

        AO::insert([
            ['reference' => $ref , 'Acheteur' => $ach]
        ]);

        //$id = AO::where('Reference', $ref)->pluck('id');
        //$id = explode('[]', $id);
        return redirect('Create/insert');
    }

    public function insert(Request $request)
    {
        $id = AO::orderBy('id', 'desc')->first();
        
        return view('Create.insert', compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AO  $aO
     * @return \Illuminate\Http\Response
     */
    public function show(AO $aO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AO  $aO
     * @return \Illuminate\Http\Response
     */
    public function edit(AO $aO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AO  $aO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AO $aO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AO  $aO
     * @return \Illuminate\Http\Response
     */
    public function destroy(AO $aO)
    {
        //
    }

    public function getDownload(Request $request)
    {
        $file= public_path()."/".request('path');
        $exists = scandir(public_path());
        
        if(in_array(request('path'), $exists))
        {
            return Response::download($file);
        }
        else
        {
            return back();
        }
        
        
    }


}
