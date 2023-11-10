<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

/*class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view ('produtos.index', compact('produtos'));
    }
    public function create(){
        return view('produtos.create');
    }
    public function store(Request $request){
        $item = new Produto;
        $item-> nome = $request->input('nome');
        $item-> valor = $request->input('valor');
        $item->save();
        return redirect()->route('produtos.index')->with('success', 'Item criado com sucesso!');
    }
    public function edit (Produto $produto){
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto){
        $produto->nome = $request-> input ('nome');
        $produto->valor = $request-> input ('valor');
        $produto->save();

        return redirect()->route('produtos.index')-> with('success', 'Item atualizado com sucesso!'); 
       }
       public function destroy(Produto $produto){
       // $item->delete();
       }
}
*/