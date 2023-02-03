<?php

namespace App\Http\Controllers;

use App\Models\Saint;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // get info from model
        //ritorna tutte le righe della tabella saint
        $saints = Saint::all();
        //è una classe?


        $data = [
            'saints' => $saints
        ];
        return view('home', $data);
    }

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
}
