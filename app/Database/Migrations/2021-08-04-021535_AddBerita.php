<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBerita extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_berita'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_user'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'comment'		 => 'User yg membuat',
			],
			'judul_berita'	=> [
				'type'           => 'TEXT',
			],
			'isi_berita'	=> [
				'type'           => 'TEXT',
			],
			'file_foto'   =>  [
				'type'           => 'TEXT',
			],
			'waktu_buat'   => [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
		]);

		$this->forge->addKey('id_berita', TRUE);
		$this->forge->addForeignKey('id_user','tbl_user','id_user','CASCADE','CASCADE');
		$this->forge->createTable('tbl_berita', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_berita');
	}
}
