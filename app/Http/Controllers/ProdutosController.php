<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function registrarProduto(Request $request)
    {
    //Criando um produto no bd
    Produto::create([
        'nome' => $request->nome, 
        'valor' => $request->valor, 
        'estoque' => $request->estoque
    ]);

    echo "Produto criado com sucesso!!!";
    }

    public function verProduto($id)
    {
        $produto = Produto::findOrfail($id); //findorfail para não aparecer o erro completo p usuário e sim, apenas o error 404 page
        return view('ver', ['produto' => $produto]);
    }

    public function updateProduto($id)
    {
        $produto = Produto::findOrfail($id); //encontrando o produto
        return view('update', ['produto' => $produto]);  //retornando no view, pagina update-produto
    }

    public function updateEnviarProduto(Request $request, $id)
    {
    $produto = Produto::findOrfail($id);          //encontrando o produto
    $produto->update([                       //Editando no bd
        'nome' => $request->nome, 
        'valor' => $request->valor, 
        'estoque' => $request->estoque
    ]);

    echo "Produto editado com sucesso!!!";
    }

    public function excluirProduto($id)
    {
        $produto = Produto::findOrfail($id);  
        $produto->delete();        
        echo "Produto excluído com sucesso!!!";
    }
}
