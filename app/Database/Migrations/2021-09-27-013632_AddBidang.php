<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBidang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_bidang'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_bidang'  	 	=> [
				'type'           => 'TEXT',
			],
			'ket_bidang'      	=> [
				'type'           => 'TEXT',
			],
			'icon_bidang'      	=> [
				'type'           => 'VARCHAR',
				'constraint'     => '45',
				'null'			 => TRUE,
			],
			'active'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>active; 0=>not active',
				'default'        => '1',
			],
		]);

		$this->forge->addKey('id_bidang', TRUE);
		$this->forge->createTable('tbl_bidang', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_bidang');
	}
}
