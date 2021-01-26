<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{
    use HasFactory;

    protected $table = "investimento";
    protected $fillable = ['nome'];

        // Criando relação a tabela Cliente
        public function clientes(){
            return $this->hasMany('App\Models\Cliente');
        }

}