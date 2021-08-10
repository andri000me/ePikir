<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertCarousel extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'judul_carousel' => 'Slide1',
				'ket_carousel'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_carousel'	=> 'img1.jpg',
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
				'file_carousel'	=> 'img4.jpg',
			),
			array(
				'judul_carousel' => 'Slide5',
				'ket_carousel'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis
				luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit
				at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. ',
				'file_carousel'	=> 'img5.jpg',
			),
		);

		$this->db->table('tbl_carousel')->insertBatch($data);

	}
}
