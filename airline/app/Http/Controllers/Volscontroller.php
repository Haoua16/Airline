<?php

namespace App\Http\Controllers;

use App\Models\vols;
use Illuminate\Http\Request;

class Volscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $vols = vols::all();

    return view('index', compact('vols'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // CarController.php


public function create()
{
    return view('create');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $validatedData = $request->validate([
            'destination' => 'required|max:255',
            'code_vol' => 'required|max:255',
            'date_depart' => 'required',
            'heure_depart' => 'required',
            'nombre_classA' => 'required',
            'prix_classA' => 'required',
            'nombre_classB' => 'required',
            'prix_classB' => 'required',
        ]);
    
        $vols = vols::create($validatedData);
    
        return redirect('/vols')->with('success', 'Vol ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $vols = vols::findOrFail($id);

    return view('edit', compact('vols'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // CarController.php

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'destination' => 'required|max:255',
        'code_vol' => 'required|max:255',
        'date_depart' => 'required',
        'heure_depart' => 'required',
        'nombre_classA' => 'required',
        'prix_classA' => 'required',
        'nombre_classB' => 'required',
        'prix_classB' => 'required',
    ]);

    $vols = vols::whereId($id)->update($validatedData);

    return redirect('/vols')->with('success', 'Vol mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $vol = vols::findOrFail($id);
    $vol->delete();

    return redirect('/vols')->with('success', 'Vol supprimé avec succèss');
}
}
