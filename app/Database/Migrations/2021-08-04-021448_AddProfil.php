<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProfil extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_profil'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'isi_profil'  	 		=> [
				'type'           => 'TEXT',
			],
			'tugas_pokok'      		=> [
				'type'           => 'TEXT',
			],
			'struktur_organisasi'    => [
				'type'           => 'TEXT',
				'comment'		 => 'Bentuk file gambar',
			],
			'regulasi'    => [
				'type'           => 'TEXT',
			],
			'kontak'   => [
				'type'           => 'TEXT',
			],
			'waktu_update'   => [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
		]);

		$this->forge->addKey('id_profil', TRUE);
		$this->forge->createTable('tbl_profil', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_profil');
	}
}
