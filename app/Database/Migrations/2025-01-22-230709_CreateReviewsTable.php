<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        if ($this->db->tableExists('reviews')) {
            return;
        }

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'rating' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'null'       => false,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'approved', 'rejected'],
                'default'    => 'pending',
            ],
            'message' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'product_collection_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => false,
                'default' => 'CURRENT_TIMESTAMP',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey();
        $this->forge->createTable('reviews');
    }

    public function down()
    {
        //
    }
}
