<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertGaleri extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'id_user' 		 => 1,
				'id_kg'			 => 1,
				'judul_galeri'	 => 'Judul Galeri',
				'ket_galeri'	 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. ',
				'file_foto'		 => 'p1.jpg',
				'waktu_kegiatan' => date('Y-m-d', strtotime('12-08-2021')),
				'waktu_update'	 => date('Y-m-d H:i:s'),
				'jenis_galeri'	 => 1,
			),
			array(
				'id_user' 		 => 1,
				'id_kg'			 => 2,
				'judul_galeri'	 => 'Judul Galeri',
				'ket_galeri'	 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. ',
				'file_foto'		 => 'p2.jpg',
				'link_video'	 => 'https://youtu.be/jZCpr10X2tk',
				'waktu_kegiatan' => date('Y-m-d', strtotime('15-07-2021')),
				'waktu_update'	 => date('Y-m-d H:i:s'),
				'jenis_galeri'	 => 1,
			),
			array(
				'id_user' 		 => 1,
				'id_kg'			 => 3,
				'judul_galeri'	 => 'Judul Galeri',
				'ket_galeri'	 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. ',
				'file_foto'		 => 'p3.jpg',
				'waktu_kegiatan' => date('Y-m-d', strtotime('10-07-2021')),
				'waktu_update'	 => date('Y-m-d H:i:s'),
				'jenis_galeri'	 => 1,
			),
			array(
				'id_user' 		 => 1,
				'id_kg'			 => 1,
				'judul_galeri'	 => 'Judul Galeri',
				'ket_galeri'	 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. ',
				'file_foto'		 => 'p4.jpg',
				'waktu_kegiatan' => date('Y-m-d', strtotime('05-07-2021')),
				'waktu_update'	 => date('Y-m-d H:i:s'),
				'jenis_galeri'	 => 1,
			),
			array(
				'id_user' 		 => 1,
				'id_kg'			 => 2,
				'judul_galeri'	 => 'Judul Galeri',
				'ket_galeri'	 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. ',
				// 'file_foto'		 => 'p5.jpg',
				'link_video'	 => 'https://youtu.be/jZCpr10X2tk',
				'waktu_kegiatan' => date('Y-m-d', strtotime('11-06-2021')),
				'waktu_update'	 => date('Y-m-d H:i:s'),
				'jenis_galeri'	 => 1,
			),
			array(
				'id_user' 		 => 1,
				'id_kg'			 => 3,
				'judul_galeri'	 => 'Judul Galeri',
				'ket_galeri'	 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. ',
				'file_foto'		 => 'p6.jpg',
				'waktu_kegiatan' => date('Y-m-d', strtotime('10-07-2021')),
				'waktu_update'	 => date('Y-m-d H:i:s'),
				'jenis_galeri'	 => 1,
			),
		);

		$this->db->table('tbl_galeri')->insertBatch($data);
	}
}
