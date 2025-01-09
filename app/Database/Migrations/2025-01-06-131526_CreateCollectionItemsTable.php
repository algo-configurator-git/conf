<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCollectionItemsTable extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('product_collection_items')) {
            $this->forge->addField([
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'collection_id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'null' => false,
                ],
                'product_sku' => [
                    'type'       => 'INT',
                    'constraint' => 11,
                    'unsigned'   => true,
                    'null'       => false,
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
            $this->forge->createTable('product_collection_items');
        }
    }

    public function down()
    {
        if ($this->db->tableExists('product_collection_items')) {
            $this->forge->dropTable('product_collection_items');
        }
    }
}
