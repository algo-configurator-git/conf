<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReplyTable extends Migration
{
    public function up()
    {
        if($this->db->tableExists('replies')) {
            return;
        }

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'message' => [
                'type' => 'TEXT',
                'null' => false,
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
        $this->forge->createTable('replies', true);
    }

    public function down()
    {
        if($this->db->tableExists('replies')) {
            $this->forge->dropTable('replies');
        }
    }
}
