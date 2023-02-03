<?php

namespace App\Http\Controllers;

use App\Models\Saint;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $saints = Saint::all();

        $data = [
            'saints' => $saints
        ];

        return view('home', $data);
    }
}
