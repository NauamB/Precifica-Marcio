<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedor = Fornecedor::all();
        return view ('fornecedors.index', compact('fornecedor'));
    }
    public function create(){
        return view('fornecedors.create');
    }
    public function store(Request $request){
        $item = new Fornecedor;
        $item-> nome = $request->input('nome');
        $item-> valor = $request->input('CNPJ');
        $item->save();
        return redirect()->route('fornecedors.index')->with('success', 'Item criado com sucesso!');
    }
    public function edit (Fornecedor $fornecedor){
        return view('fornecedors.edit', compact('fornecedor'));
    }

    public function update(Request $request, Fornecedor $fornecedor){
        $fornecedor->nome = $request-> input ('nome');
        $fornecedor->valor = $request-> input ('CNPJ');
        $fornecedor->save();

        return redirect()->route('fornecedors.index')-> with('success', 'Item atualizado com sucesso!'); 
       }
       public function destroy(Fornecedor $fornecedor){
        //$item->delete();
       }
}
