<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ApiKey extends Migration {
    public function up() {
        $this->forge->addField([
            'id_api' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'api' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'key' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'device' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('id_api', true);
        $this->forge->createTable('api_key');
    }

    public function down() {
        $this->forge->dropTable('api_key');
    }
}
