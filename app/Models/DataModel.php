<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model {
    protected $table = 'data';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $allowedFields = ['device', 'suhu', 'kelembaban'];

    public function totaldata() {
        $result = $this->table('data')->countAll();
        return $result;
    }

}