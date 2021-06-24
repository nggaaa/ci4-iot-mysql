<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = false;
    protected $allowedFields = ['name_user', 'email_user', 'password_user', 'role'];

    public function login($data) {
        $email = $data['email'];
        $password = $data['password'];
        $user = $this->table('users')->where('email_user', $email)->first();
        if ($user) {
            if (password_verify($password, $user['password_user'])) {
                return $user['id_user'];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function findrole($data) {
        $user = $this->table('users')->where('id_user', $data)->first();
        return $user['role'];
    }
}