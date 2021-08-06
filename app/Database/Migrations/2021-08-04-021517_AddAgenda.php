<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAgenda extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_agenda'  	 => [
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
			'judul_agenda'	=> [
				'type'           => 'TEXT',
			],
			'isi_agenda'	=> [
				'type'           => 'TEXT',
			],
			'waktu_agenda'   =>  [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
			'waktu_update'   => [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
			'active'      => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>active; 0=>not active',
				'default'        => '1',
			],

		]);

		$this->forge->addKey('id_agenda', TRUE);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'NO ACTION');
		$this->forge->createTable('tbl_agenda', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_agenda');
	}
}
