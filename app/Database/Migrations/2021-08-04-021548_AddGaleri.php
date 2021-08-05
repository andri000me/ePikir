<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGaleri extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_galeri'  	 => [
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
			'judul_foto'	=> [
				'type'           => 'TEXT',
			],
			'waktu_kegiatan'	=> [
				'type'           => 'date',
				'null'			 => TRUE,
			],
			'file_foto'   =>  [
				'type'           => 'TEXT',
			],
			'waktu_buat'   => [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
			'status'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>active; 0=>not active',
				'default'        => '1',
			],
		]);

		$this->forge->addKey('id_galeri', TRUE);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tbl_galeri', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_galeri');
	}
}
