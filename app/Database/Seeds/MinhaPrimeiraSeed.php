<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeed extends Seeder
{
    public function run()
    {   // database tabela produtos iserir
        $this->db->table('produtos')->insert([
            'nome'            => 'NootBook',
            'descricao'       => 'descriçao do produto para minha primeira seed',
            'valor_de_compra' => 1299.90,
            'valor_de_venda'  => 1599.99,
            'quantidade'      => 9,
            'validade'        => ''
        ]); 
    }
}
