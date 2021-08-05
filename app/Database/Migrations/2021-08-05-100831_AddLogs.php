<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLogs extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_logs'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_user'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'comment'		 => 'User yg login',
			],
			'ip_address'	=> [
				'type'           => 'varchar',
				'constraint'     => '50',
			],
			'waktu_logs'	=> [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
		]);

		$this->forge->addKey('id_logs', TRUE);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tbl_logs', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_logs');
	}
}
