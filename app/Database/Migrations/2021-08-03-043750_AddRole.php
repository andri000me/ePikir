<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRole extends Migration
{
	public function up()
	{
		// Membuat kolom/field
		$this->forge->addField([
			'id_role'          => [
				'type'           => 'INT',
				'constraint'     => 2,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_role'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			// 'content' => [
			// 	'type'           => 'TEXT',
			// 	'null'           => true,
			// ],
			// 'status'      => [
			// 	'type'           => 'ENUM',
			// 	'constraint'     => ['published', 'draft'],
			// 	'default'        => 'draft',
			// ],
		]);

		// Membuat primary key
		$this->forge->addKey('id_role', TRUE);

		// Membuat tabel
		$this->forge->createTable('tbl_role', TRUE);
	}

	public function down()
	{
		// menghapus tabel 
		$this->forge->dropTable('tbl_role');
	}
}
