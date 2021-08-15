<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertBerita extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'id_user' 		=> 1,
				'id_kb'			=> 3,
				'judul_berita'	=> 'Judul Berita/Artikel',
				'isi_berita'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_foto'		=> 'blog1.jpg',
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
			array(
				'id_user' 		=> 1,
				'id_kb'			=> 2,
				'judul_berita'	=> 'Judul Berita/Artikel',
				'isi_berita'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_foto'		=> 'blog2.jpg',
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
			array(
				'id_user' 		=> 1,
				'id_kb'			=> 3,
				'judul_berita'	=> 'Judul Berita/Artikel',
				'isi_berita'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_foto'		=> 'blog3.jpg',
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
			array(
				'id_user' 		=> 1,
				'id_kb'			=> 1,
				'judul_berita'	=> 'Judul Berita/Artikel',
				'isi_berita'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_foto'		=> 'blog4.jpg',
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
			array(
				'id_user' 		=> 1,
				'id_kb'			=> 1,
				'judul_berita'	=> 'Judul Berita/Artikel',
				'isi_berita'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_foto'		=> 'blog5.jpg',
				'waktu_update'	=> date('Y-m-d H:i:s'),
			),
		);

		$this->db->table('tbl_berita')->insertBatch($data);
	}
}
