<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertNoSurat extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'kesbangpol'	=> '001',
				'dpmptsp'		=> '001',
				'bappeda'		=> '001',
				'jenis'			=> 'penelitian',
				'tahun'			=> date('Y'),
			),
			array(
				'kesbangpol'	=> '001',
				'dpmptsp'		=> '001',
				'bappeda'		=> '001',
				'jenis'			=> 'pengabdian',
				'tahun'			=> date('Y'),
			),
		);

		$this->db->table('tbl_no_surat')->insertBatch($data);
	}
}
