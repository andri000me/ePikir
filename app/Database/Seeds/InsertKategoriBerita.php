<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertKategoriBerita extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'nama_kategori' => 'Penelitian',
			),
			array(
				'nama_kategori' => 'Inovasi',
			),
			array(
				'nama_kategori' => 'Informasi',
			),
		);

		$this->db->table('tbl_kategori_berita')->insertBatch($data);
	}
}
