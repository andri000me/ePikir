<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRencanaKerja extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_rk'  	 => [
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
			'judul_rk'	=> [
				'type'           => 'TEXT',
			],
			'isi_rk'	=> [
				'type'           => 'TEXT',
			],
			'bulan_rk'   =>  [
				'type'           => 'varchar',
				'constraint'     => '20',
			],
			'waktu_update'   => [
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

		$this->forge->addKey('id_rk', TRUE);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'NO ACTION');
		$this->forge->createTable('tbl_rencana_kerja', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_rencana_kerja');
	}
}
