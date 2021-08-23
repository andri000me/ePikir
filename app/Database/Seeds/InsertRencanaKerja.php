<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertRencanaKerja extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'id_user' 		=> 1,
				'tahun_rk'		=> '2020',
				'file_rk'		=> 'rk_2020.pdf',
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
			array(
				'id_user' 		=> 1,
				'tahun_rk'		=> '2021',
				'file_rk'		=> 'rk_2021.pdf',
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
		);

		$this->db->table('tbl_rencana_kerja')->insertBatch($data);
	}
}
