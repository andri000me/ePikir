<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRegulasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_regulasi'  	 => [
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
			'nama_regulasi'  	 		=> [
				'type'           => 'TEXT',
			],
			'isi_regulasi'      		=> [
				'type'           => 'TEXT',
			],
			'file_regulasi'    => [
				'type'           => 'TEXT',
				'comment'		 => 'File regulasi PDF yg bisa diunduh',
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

		$this->forge->addKey('id_regulasi', TRUE);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'NO ACTION');
		$this->forge->createTable('tbl_regulasi', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_regulasi');
	}
}
