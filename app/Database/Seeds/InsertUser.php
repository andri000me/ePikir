<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertUser extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'id_role' => 1,
				'nama_user'	=> 'Rafho',
				'username'	=> 'rafho',
				'password'	=> md5('admin123'),
			),
		);

		$this->db->table('tbl_user')->insertBatch($data);
	}
}
