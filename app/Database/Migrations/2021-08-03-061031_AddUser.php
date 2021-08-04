<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
	public function up()
	{
		// Membuat kolom/field 
		$this->forge->addField([
			'id_user'          => [
				'type'           => 'INT',
				'constraint'     => 2,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_role' => [
				'type'           => 'INT',
				'constraint'     => 2,
				'unsigned' 		 => TRUE,
			],
			'nama_user'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'active'      => [
				'type'           => 'tinyint',
				'constraint'     => 1,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_user', TRUE);

		// Membuat foreign key
		$this->forge->addForeignKey('id_role','tbl_role','id_role','CASCADE','CASCADE');

		// Membuat tabel
		$this->forge->createTable('tbl_user', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_user');
	}
}
