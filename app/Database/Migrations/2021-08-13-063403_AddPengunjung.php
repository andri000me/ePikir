<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPengunjung extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pengunjung'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'ip_add'	=> [
				'type'           => 'varchar',
				'constraint'     => '50',
			],
			'tanggal'   => [
				'type'           => 'date',
			],
		]);

		$this->forge->addKey('id_pengunjung', TRUE);
		$this->forge->createTable('tbl_pengunjung', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_pengunjung');
	}
}
