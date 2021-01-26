<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "cliente";
    protected $fillable = ['nome', 'sobrenome', 'email', 'investimento_id'];
    // Criando relação entre a tabela investimento_id e o objeto investimento
    public function investimento(){
        return $this->belongsTo('App\Models\Investimento');
    }

}