<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() //comando para popular a tabela investimento
    {
        \App\Models\Investimento::create([
            'id' => '1',
            'nome' => 'XasTree Invest'
        ]);

        \App\Models\Investimento::create([
            'id' => '2',
            'nome' => 'XasTree Teste'
        ]);

        \App\Models\Investimento::create([
            'id' => '3',
            'nome' => 'XasTree Foca'
        ]);


    }
    
}
