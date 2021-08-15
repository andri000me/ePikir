<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertKategoriGaleri extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'nama_kategori' => 'Kegiatan',
			),
			array(
				'nama_kategori' => 'Litbang',
			),
			array(
				'nama_kategori' => 'Inovasi',
			),
		);

		$this->db->table('tbl_kategori_galeri')->insertBatch($data);
	}
}
