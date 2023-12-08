<?php

namespace App\Http\Controllers;

use App\Models\Peixe;
use Illuminate\Http\Request;

class PeixesController extends Controller
{

    public function index()
    {
        $peixes = Peixe::all();
    
        return view('peixes.index')->with('peixes', $peixes);
    }

    public function paginaCriacao()
    {
        return view('peixes.create');
    }

    public function peixecriado(Request $request)
    {

        $request->validate([
            'nome' => 'required',
        ]);

        Peixe::create([
            'nome' => $request->nome,
        ]);

        return redirect()->route('peixes.index')->with('success', 'Peixe criado com sucesso!');
    }
    
    public function editar($id)
    {
        $peixe = Peixe::find($id);

        if (!$peixe) {
            abort(404); 
        }

        return view('peixes.editar', ['peixe' => $peixe]);
    }

    public function atualizar(Request $request, $id)
    {
        $peixe = Peixe::find($id);

        if (!$peixe) {
            abort(404); 
        }
        
        $peixe->nome = $request->input('nome');
        $peixe->save();

        return redirect()->route('peixes.index')->with('success', 'Peixe atualizado com sucesso!');
    }

    public function deletar($id)
    {
        $peixe = Peixe::find($id);


        if (!$peixe) {
            abort(404); 
        }

        $peixe->delete();
        return redirect()->route('peixes.index')->with('success', 'Peixe deletado com sucesso!');
    }

}
