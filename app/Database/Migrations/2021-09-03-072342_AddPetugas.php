<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPetugas extends Migration
{
	public function up()
	{
		// Membuat kolom/field 
		$this->forge->addField([
			'id_petugas'         => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_role' => [
				'type'           => 'INT',
				'constraint'     => 2,
				'unsigned' 		 => TRUE,
			],
			'nama_petugas'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'nip_petugas'        => [
				'type'           => 'VARCHAR',
				'constraint'     => '25'
			],
			'pangkat_petugas'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'jabatan_petugas'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'active'      => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>active; 0=>not active',
				'default'        => '1',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_petugas', TRUE);

		// Membuat foreign key
		$this->forge->addForeignKey('id_role', 'tbl_role', 'id_role', 'CASCADE', 'CASCADE');

		// Membuat tabel
		$this->forge->createTable('tbl_petugas', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_petugas');
	}
}
