<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertAgenda extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'id_user' 		=> 1,
				'judul_agenda'	=> 'Judul Agenda',
				'isi_agenda'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ',
				'waktu_agenda'	=> date('Y-m-d H:i:s'),
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
			array(
				'id_user' 		=> 1,
				'judul_agenda'	=> 'Judul Agenda',
				'isi_agenda'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ',
				'waktu_agenda'	=> date('Y-m-d H:i:s'),
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
			array(
				'id_user' 		=> 1,
				'judul_agenda'	=> 'Judul Agenda',
				'isi_agenda'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ',
				'waktu_agenda'	=> date('Y-m-d H:i:s'),
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
			array(
				'id_user' 		=> 1,
				'judul_agenda'	=> 'Judul Agenda',
				'isi_agenda'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ',
				'waktu_agenda'	=> date('Y-m-d H:i:s'),
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
		);

		$this->db->table('tbl_agenda')->insertBatch($data);
	}
}
