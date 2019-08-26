<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permissions')->insert([
            'name'=>'edit-atendimento',
            'descricao'=>'Editar Atendimentos',
        ]);

        DB::table('permissions')->insert([
            'name'=>'edit-cliente',
            'descricao'=>'Editar Clientes',
        ]);

        DB::table('permissions')->insert([
            'name'=>'edit-venda',
            'descricao'=>'Editar Vendas',
        ]);

        DB::table('permissions')->insert([
            'name'=>'edit-categorias',
            'descricao'=>'Editar Categorias',
        ]);

        DB::table('permissions')->insert([
            'name'=>'edit-produto',
            'descricao'=>'Editar Produtos',
        ]);


        DB::table('permissions')->insert([
            'name'=>'view-cliente',
            'descricao'=>'Visualizar Clientes',
        ]);





        DB::table('roles')->insert([
            'name'=>'Admin',
            'descricao'=>'Administrador do Sistema',
            'empresa_id'=>'1'
        ]);


        DB::table('clientes')->insert([
            'nome'=>'CLIENTE PADRÃO',
            'sexo'=>'M',
            'tipo'=>'Fisica'
            ]);

        DB::table('forma_pagamentos')->insert([
            'nome'=>'Dinheiro',
            'tPag' => '01'
               ]);

        DB::table('forma_pagamentos')->insert([
            'nome'=>'Crédito',
            'tPag' => '03',
            'tBand' => '01'
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome'=>'Débito',
            'tPag' => '03',
            'tBand' => '01'
        ]);

        DB::table('categorias')->insert([
            'categoria'=>'Recarga',
            'categoria_type'=>'produtos'

        ]);


        DB::table('produtos')->insert([
            'nome'=>'Troca Galão 20 lts',
            'tipo'=>'servico',
            'custo'=>'3.50',
            'preco'=>'10.00',
            'categoria_id'=>'1',
            'codigo_cfop' => '5933',
            'codigo_ncm' => '00'

        ]);



    }
}
