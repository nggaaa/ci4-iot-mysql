<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'Septiandro Surya Dewangga',
			'email' => 'septiandrosuryadewangga@gmail.com',
			'sandi' => password_hash('1234', PASSWORD_DEFAULT),
];

// Using Query Builder
	$this->db->table('users')->insert($data);
	}
}
