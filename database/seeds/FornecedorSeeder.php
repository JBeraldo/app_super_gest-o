<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fornecedor::create([
            "nome" => 'Fornecedor200',
            "site" => 'Fornecedor200.com.br',
            "uf"   => 'PR',
            "email"=> 'fornecedor200@fornecedor200.com.br'
        ]);
    }
}
