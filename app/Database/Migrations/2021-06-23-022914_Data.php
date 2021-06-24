<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration {
    public function up() {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'api' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'device' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'suhu' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'kelembaban' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('data');
    }

    public function down() {
        $this->forge->dropTable('data');
    }
}
