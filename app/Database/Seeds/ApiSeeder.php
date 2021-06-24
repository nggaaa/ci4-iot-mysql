<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ApiSeeder extends Seeder {
    public function run() {
    helper('text');
    for ($i=0; $i < 10; $i++) { 
    $data = [
    'api' => random_string('sha1', 10),
    'key' => random_string('md5', 10),
    'device' => 'Device-' . random_string('numeric', 5),
];

$this->db->table('api_key')->insert($data);
        }
        
    }
}
