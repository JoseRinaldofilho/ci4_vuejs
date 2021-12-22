<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produto' => [
                'type'          => 'INT',
                'constraint'    => 9, // tamanho da linha
                'unsigned'      => true, //usa e inserir + 1
                'auto_increment' => true,
            ],
            'name'       => [
                'type'   => 'VARCHAR',
                'constraint' => 128, // tamanho 
            ],
            'descricao' => [
                'type' => 'TEXT', // texte 
                
            ],
            'valor_de_compra' => [
                'type' => 'DOUBLE', // tipo com decimal double 
                
            ],
            'valor_de_venda' => [
                'type' => 'DOUBLE', // tipo com decimal double 
                
            ],
            'quantidade' => [
                'type'   => 'INT',
                
            ],
            'validade'          => [
                'type'       => 'DATE', 
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true, 
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_produto', true); // id 
        $this->forge->createTable('produtos');  // nome da tabela
    }
    public function down()
    {
        $this->forge->dropTable('produtos'); // apaga a tabela
    }
}
