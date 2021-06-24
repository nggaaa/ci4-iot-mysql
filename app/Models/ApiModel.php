<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model {
    protected $table = 'api_key';
    protected $primaryKey = 'id_api';
    protected $useTimestamps = false;
    protected $allowedFields = ['device', 'api', 'key'];

    public function totalapi() {
        $result = $this->table('api_key')->countAll();
        return $result;
    }
    public function addApi() {
        helper('text');
        $data = [
            'api' => random_string('sha1', 10),
            'key' => random_string('md5', 10),
            'device' => 'Device-' . random_string('numeric', 5),
        ];

        $this->db->table('api_key')->insert($data);
    }
    public function apiHandler($api, $key) {
        $apiresult = $this->table('api_key')->where('api', $api)->first();
        if ($apiresult) {
            if ($apiresult['key'] == $key) {
                return $apiresult['device'];
            }
            return false;
        }
        return false;
    }
}
