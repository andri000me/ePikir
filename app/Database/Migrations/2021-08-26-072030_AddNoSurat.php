<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNoSurat extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_no_surat'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kesbangpol'	=> [
				'type'           => 'varchar',
				'constraint'     => '5',
			],
			'dpmptsp'	=> [
				'type'           => 'varchar',
				'constraint'     => '5',
			],
			'bappeda'	=> [
				'type'           => 'varchar',
				'constraint'     => '5',
			],
			'jenis'     => [
				'type'           => 'ENUM',
				'constraint'     => ['penelitian', 'pengabdian'],
				'default'        => 'penelitian',
			],
			'tahun'   => [
				'type'           => 'char',
				'constraint'     => '4',
			],
		]);

		$this->forge->addKey('id_no_surat', TRUE);
		$this->forge->createTable('tbl_no_surat', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_no_surat');
	}
}
