<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        SiteContato::create([
//            "nome"           => "Sistema SG",
//            "telefone"       => "(42) 999651449",
//            "email"          => "sistema@sistema.com",
//            "motivo_contato" => 1,
//            "mensagem"       => "teste",
//        ]);

        factory(SiteContato::class, 1)->create();

    }
}
