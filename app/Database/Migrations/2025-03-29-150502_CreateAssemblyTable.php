<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAssemblyTable extends Migration
{
    public function up()
    {
        if (!$this->db->tableExists('assemblies')) {
            $this->forge->addField([
                'id' => [
                    'type' => 'INT',
                    'constraint' => '11',
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'name' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'type' => [
                    'type' => 'ENUM',
                    'constraint' => ['home', 'office', 'gamer', 'developer', 'designer'],
                ],
                'total_price' => [
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                ],
                'total_discount_price' => [
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                ],
                'rating' => [
                    'type' => 'DOUBLE',
                    'constraint' => '5,1',
                    'null' => false,
                    'default' => 0,
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => false,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => false,
                ]
            ]);

            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('assemblies');
        }
    }

    public function down()
    {
        if ($this->db->tableExists('assemblies')) {
            $this->forge->dropTable('assemblies');
        }
    }
}
