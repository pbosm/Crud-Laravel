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

}
