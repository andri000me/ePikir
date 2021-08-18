<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertRegulasi extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_regulasi' => 'UU NO. 1 TAHUN 2025',
				'isi_regulasi'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_regulasi'	=> 'regulasi_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
		);

		$this->db->table('tbl_regulasi')->insertBatch($data);
	}
}
