<?php

namespace App\Http\Controllers;

use App\Models\Saint;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get info from model
        //ritorna tutte le righe della tabella saint
        $saints = Saint::all();
        //è una classe?
        // Come fa larval ha capire da quale tabella deve prendere i dati????


        $data = [
            'saints' => $saints
        ];
        return view('index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $data = $request->all();

        $newSaint = new Saint;
        $newSaint->name = ucfirst($data['name']);
        $newSaint->place_of_birth = ucwords($data['place_of_birth']);
        $newSaint->blessing_date = $data['blessing_date'];
        $newSaint->miracles_count = $data['miracles_count'];
        $newSaint->save();

        return redirect()->route('saints.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //ritorna una singola riga del id corrispondente della tabella saint
        $saints = Saint::find($id);
        //è una classe?

        $data = [
            'saints' => $saints
        ];

        return view('show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $saints = Saint::find($id);
        $saints->delete();

        return redirect()->route('saints.index');
    }
}
