<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = false;
    protected $allowedFields = ['name_user', 'email_user', 'password_user', 'role'];

    public function userData($id) {
        $user = $this->table('users')->where('id_user', $id)->first();
        return $user;
    }
    public function totalUser() {
        $result = $this->table('users')->countAll();
        return $result;
    }
}