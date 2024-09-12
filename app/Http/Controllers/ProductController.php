<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function formCriarProduto(){
        return view("cadastro_produto");
    }
    public function criarProduto(Request $request){
        $produtos = new Produto;
        $produtos->name = $request->name;
        $produtos->descricao = $request->descricao;
        $produtos->preco = $request->preco;

        $produtos-> save();
        return redirect('/listar_produto');
        
    }

    public function listarProduto() {
        $produtos = produto::all();

        return view("produtos", ["produtos"=>$produtos]);
    }
}