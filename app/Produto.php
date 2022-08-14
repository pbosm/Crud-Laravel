<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //especificar quais campos vamos trabalhar do bd
    protected $fillable = ['nome', 'valor', 'estoque']; //colunas do bd
    //     $ php artisan tinker
    //     Psy Shell v0.11.8 (PHP 8.0.13 — cli) by Justin Hileman
    // >>> Produto::create(['nome' => 'celular', 'valor' => 1000.29, 'estoque' => 50]); criando um dado temporario para ver se está funcionando 

    //Relações
    public function variacoes()
    {
        return $this->hasMany(RelacaoUmPraMuitos::class, 'id_produto'); //dando  o comando dizendo que variacoes() tem um relacaoumpramuitos referente ao id_produto
        //utilizando o tinker e dando o comando -> Produto::with('variacoes')->find(6); dará para ver as variacoes, Monitor contendo várias marcas nesse caso
    }

}
