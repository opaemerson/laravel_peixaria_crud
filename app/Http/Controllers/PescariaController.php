<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PescariaController extends Controller
{

    public function index()
    {
        return view('pescaria.index');
    }
    
}
