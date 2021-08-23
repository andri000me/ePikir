<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertAll extends Seeder
{
	public function run()
	{
		$this->call('InsertCarousel');
		$this->call('InsertRole');
		$this->call('InsertUser');
		$this->call('InsertKategoriBerita');
		$this->call('InsertBerita');
		$this->call('InsertProfil');
		$this->call('InsertRegulasi');
		$this->call('InsertAgenda');
		$this->call('InsertRencanaKerja');
		$this->call('InsertKategoriGaleri');
		$this->call('InsertGaleri');
	}
}
