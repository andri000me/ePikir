<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertBidang extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'nama_bidang'	=> 'Subid Litbang Pemerintahan Sosial & Budaya',
				'ket_bidang'	=> 'Lingkup Penelitian dan Pengembangan Penyelenggaraan Pemerintahan, Pengkajian Peraturan, Sosial dan Kependudukan',
				'icon_bidang'	=> 'fa fa-users',
			),
			array(
				'nama_bidang'	=> 'Subid Litbang Ekonomi & Pengembangan Wilayah',
				'ket_bidang'	=> 'Welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a
				tristique tortor maximus',
				'icon_bidang'	=> 'fa fa-line-chart',
			),
			array(
				'nama_bidang'	=> 'Subid Pengembangan & Penerapan IPTEK',
				'ket_bidang'	=> 'Welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a
				tristique tortor maximus',
				'icon_bidang'	=> 'fa fa-cogs',
			),

		);

		$this->db->table('tbl_bidang')->insertBatch($data);
	}
}
