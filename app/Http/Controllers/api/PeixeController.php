<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peixe;

class PeixeController extends Controller
{

    public function index()
    {
        return Peixe::all();
    }


    public function store(Request $request)
    {
        Peixe::create($request->all());
    }


    public function show($id)
    {
        return Peixe::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $peixe = Peixe::findOrFail($id);
        $peixe->update($request->all());
    }


    public function destroy($id)
    {
        $peixe = Peixe::findOrFail($id);
        $peixe->delete();
    }
}
