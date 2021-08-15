<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertRole extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'nama_role' => 'bappeda',
			),
			array(
				'nama_role' => 'dpmptsp',
			),
			array(
				'nama_role' => 'kesbangpol',
			),
		);

		$this->db->table('tbl_role')->insertBatch($data);
	}
}
