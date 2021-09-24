<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertInfoPublik extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
			array(
				'id_user' 		=> 1,
				'nama_info' => 'Informasik Publik',
				'isi_info'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet.',
				'file_info'	=> 'info_1.pdf',
				'waktu_update'	=> date('Y-m-h H:i:s')
			),
		);

		$this->db->table('tbl_info_publik')->insertBatch($data);
	}
}
