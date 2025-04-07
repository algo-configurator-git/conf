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
            'reply_id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => false,
                'null'              => true,
            ],
            'rating' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'min'        => 1,
                'max'        => 5,
                'null'       => false,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'type' => [
                'type'       => 'ENUM',
                'constraint' => ['config-quality', 'assembler-work', 'assembly-rating', 'consultation'],
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
            'assembly_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('status');
        $this->forge->addKey('assembly_id');
        $this->forge->addForeignKey('reply_id', 'replies', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('reviews');
    }

    public function down()
    {
        if($this->db->tableExists('reviews')) {
            $this->forge->dropTable('reviews');
        }
    }
}
