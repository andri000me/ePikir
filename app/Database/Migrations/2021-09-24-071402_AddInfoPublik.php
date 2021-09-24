<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddInfoPublik extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_info'  	 => [
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
			'nama_info'  	 	=> [
				'type'           => 'TEXT',
			],
			'isi_info'      	=> [
				'type'           => 'TEXT',
			],
			'file_info'    => [
				'type'           => 'TEXT',
				'comment'		 => 'File info publikasi PDF yg bisa diunduh',
				'null'			 => TRUE,
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

		$this->forge->addKey('id_info', TRUE);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'NO ACTION');
		$this->forge->createTable('tbl_info_publik', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_info_publik');
	}
}
