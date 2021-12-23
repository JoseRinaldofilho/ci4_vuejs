<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Produtos extends Controller{
    
    public function index()
    {
        $titulo = 'Meus produtos';
       $produtos = [
           [
               'nome' =>"noteBook",
               'descricao'       =>"produto velho",
               'valor_de_compra' => 899.99,
               'valor_de_venda' => 1399.9,
               'quantidade' => 11,
               'validade'          =>''
           ],
           [
               'nome' => 'NootBook I5',
               'descricao'       =>"produto Novo",
               'valor_de_compra' => 1899.99,
               'valor_de_venda' => 3399.9,
               'quantidade' => 1,
               'validade'          =>''

           ]
        ];
      
        $data['titulo'] = $titulo;

        $data['produtos'] = $produtos;

        echo view('produtos/index', $data);
       
    }

}