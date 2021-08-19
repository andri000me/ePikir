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
			'id_kb'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'comment'		 => 'ID kategori berita',
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
			'waktu_update'   => [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
			'active'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>active; 0=>not active',
				'default'        => '1',
			],
		]);

		$this->forge->addKey('id_berita', TRUE);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'NO ACTION');
		$this->forge->addForeignKey('id_kb', 'tbl_kategori_berita', 'id_kb', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tbl_berita', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_berita');
	}
}
