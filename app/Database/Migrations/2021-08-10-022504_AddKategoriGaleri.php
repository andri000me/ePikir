<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKategoriGaleri extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_kg'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_kategori'	=> [
				'type'           => 'varchar',
				'constraint'     => '250',
			],
			'active'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>active; 0=>not active',
				'default'        => '1',
			],
		]);

		$this->forge->addKey('id_kg', TRUE);
		$this->forge->createTable('tbl_kategori_galeri', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_kategori_galeri');
	}
}
