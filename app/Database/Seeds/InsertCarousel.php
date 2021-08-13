<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertCarousel extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'judul_carousel' => 'Selamat Datang di Website <span><i>e-Pikir</i></span> <br> Kabupaten <span>Magelang</span>',
				'ket_carousel'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_carousel'	=> 'pemda_kab_mgl.jpg',
			),
			array(
				'judul_carousel' => 'Slide2',
				'ket_carousel'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_carousel'	=> 'img2.jpg',
			),
			array(
				'judul_carousel' => 'Slide3',
				'ket_carousel'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_carousel'	=> 'img3.jpg',
			),
			array(
				'judul_carousel' => 'Slide4',
				'ket_carousel'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_carousel'	=> 'pemda_kab_mgl_2.jpg',
			),
		);

		$this->db->table('tbl_carousel')->insertBatch($data);
	}
}
