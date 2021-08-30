<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserPemohon extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_user_pemohon'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_pemohon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'pekerjaan_pemohon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'alamat_pemohon'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'no_telp_pemohon'      => [
				'type'           => 'varchar',
				'constraint'     => '15',
			],
			'email_pemohon'      => [
				'type'           => 'varchar',
				'constraint'     => '150',
			],
		]);

		$this->forge->addKey('id_user_pemohon', TRUE);
		$this->forge->createTable('tbl_user_pemohon', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_user_pemohon');
	}
}
