<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }
    public function store(Request $request)
    {

        \App\Models\Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Produto Criado com Sucesso!";
    }
    public function show($id)
    {
        $produto = \App\Models\Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }
    public function edit($id)
    {
        $produto = \App\Models\Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }
    public function update(Request $request, $id)
    {
        $produto = \App\Models\Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,

        ]);
        return "Produto atualizado com sucesso!!";
    }
    public function delete($id)
    {
        $produto = \App\Models\Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }
    public function destroy($id){
        $produto = \App\Models\Produto::findOrFail($id);
        $produto->delete();
        return "Produto deletado com sucesso!";
    }
}