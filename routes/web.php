<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Produto;                 //é um import, como do java
use Illuminate\Http\Request;

//Index da vida
Route::get('/', function () {
    return view('inicio');
});

// //Rota de criação de produto CREATE
// Route::post('/registrar-produto', function (Request $request) {
//     // dd($request->all()); // dd = mostrar na tela e parar aplicação | all mostrar todas as informações que estão chegando

//     //Criando um produto no bd
//     Produto::create([
//         'nome' => $request->nome, 
//         'valor' => $request->valor, 
//         'estoque' => $request->estoque
//     ]);

//     echo "Produto criado com sucesso!!!";

// });

//Controller registrar produto
Route::post('/registrar-produto', 'ProdutosController@registrarProduto');

// //Rota de leitura dos produtos registrados LEAD
// Route::get('/ver-produto/{id}', function ($id) {
//     $produto = Produto::find($id);
//     return view('ver', ['produto' => $produto]);
// });

//Controller mostrar produto
Route::get('/ver-produto/{id}', 'ProdutosController@verProduto');

// //Rota de UPDATE || get para mostrar os dados
// Route::get('/update-produto/{id}', function ($id) {
//     $produto = Produto::find($id); //encontrando o produto
//     return view('update', ['produto' => $produto]);  //retornando no view, pagina update-produto
// });

//Controller update get para mostrar os dados
Route::get('/update-produto/{id}', 'ProdutosController@updateProduto');

////Rota de UPDATE | post para enviar os dados
// Route::post('/update-produto/{id}', function (Request $request, $id) {

//     $produto = Produto::find($id);          //encontrando o produto
//     $produto->update([                       //Editando no bd
//         'nome' => $request->nome, 
//         'valor' => $request->valor, 
//         'estoque' => $request->estoque
//     ]);

//     echo "Produto editado com sucesso!!!";

// });

//Controller update post para enviar os dados já novos
Route::post('/update-produto/{id}', 'ProdutosController@updateEnviarProduto');


//Rota excluir produtos
// Route::get('/delete-produto/{id}', function ($id) {

//     $produto = Produto::find($id);  
//     $produto->delete();        
//     echo "Produto excluído com sucesso!!!";

// });

//Controller Excluir
Route::get('/delete-produto/{id}', 'ProdutosController@excluirProduto');
