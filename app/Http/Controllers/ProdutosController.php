<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }
    public function store(Request $request){
        
        \App\Models\Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Produto Criado com Sucesso!";
    }
}