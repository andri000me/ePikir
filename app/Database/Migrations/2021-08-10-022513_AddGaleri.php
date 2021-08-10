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
			'id_kg'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'comment'		 => 'ID kategori galeri',
			],
			'judul_galeri'	=> [
				'type'           => 'TEXT',
			],
			'ket_galeri'	=> [
				'type'           => 'TEXT',
				'null'			 => TRUE,
			],
			'waktu_kegiatan'	=> [
				'type'           => 'date',
				'null'			 => TRUE,
			],
			'file_foto'   =>  [
				'type'           => 'TEXT',
				'null'			 => TRUE,
			],
			'link_video'   =>  [
				'type'           => 'TEXT',
				'null'			 => TRUE,
			],
			'waktu_update'   => [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
			'jenis_galeri'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>foto; 2=>video',
				'default'        => '1',
			],
			'status'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>active; 0=>not active',
				'default'        => '1',
			],
		]);

		$this->forge->addKey('id_galeri', TRUE);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'NO ACTION');
		$this->forge->addForeignKey('id_kg', 'tbl_kategori_galeri', 'id_kg', 'CASCADE', 'NO ACTION');
		$this->forge->createTable('tbl_galeri', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_galeri');
	}
}
