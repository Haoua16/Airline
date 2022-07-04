<?php

namespace App\Http\Controllers;
use App\Models\reservation;
use Illuminate\Http\Request;
use App\Models\vols;


class Reservationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = reservation::all();
    
        return view('reservation.index', compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vols = vols::all();
        return view('reservation.create', compact('vols'));
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
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'sexe' => 'required|max:255',
            'class' => 'required|max:255',
            // 'vols_id' => 'required',

        ]);
        $reservation = reservation::create($validatedData);
    
        return redirect('/reservation')->with('success', 'Reservation ajouté avec succèss');
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
        $reservation = reservation::findOrFail($id);
    
        return view('reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nom' => 'required|max:255',
        'prenom' => 'required|max:255',
        'sexe' => 'required|max:255',
        'class' => 'required|max:255',
        // 'vols_id' => 'required',
    ]);

    $reservation = reservation::whereId($id)->update($validatedData);

    return redirect('/reservation')->with('success', 'Reservation mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = reservation::findOrFail($id);
        $reservation->delete();
    
        return redirect('/reservation')->with('success', 'Reservation supprimée avec succèss');
    }
}
