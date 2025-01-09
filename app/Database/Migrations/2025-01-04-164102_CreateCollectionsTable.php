<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCollectionsTable extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('product_collections')) {
            $this->forge->addField([
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'name' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => false,
                ],
                'description' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => true,
                ],
                'created_at' => [
                    'type'    => 'DATETIME',
                    'null'    => true,
                ],
                'updated_at' => [
                    'type'    => 'DATETIME',
                    'null'    => true,
                ],
            ]);

            $this->forge->addKey('id', true);
            $this->forge->createTable('product_collections');
        }
    }

    public function down()
    {
        if ($this->db->tableExists('product_collections')) {
            $this->forge->dropTable('product_collections');
        }
    }
}
