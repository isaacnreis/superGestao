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
        //
        $fornecedor = new Fornecedor();
        $fornecedor->nome = "Fornecedor 100";
        $fornecedor->site = "fornecedor100.com.br";
        $fornecedor->uf = "CE";
        $fornecedor->email = "contato@fornecedor100.com.br";
        $fornecedor->save();

        Fornecedor::create(['nome' => 'Fornecedor 200','site'=> 'fornecedir200.com.br', 'uf'=> 'RS', 'email'=> 'contato@fornecedor200.com.br']);

        Fornecedor::create(['nome' => 'Fornecedor 300','site'=> 'fornecedir300.com.br', 'uf'=> 'SP', 'email'=> 'contato@fornecedor300.com.br']);
    }
}
