<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCarousel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_carousel'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'judul_carousel'	=> [
				'type'           => 'varchar',
				'constraint'     => '250',
				'null'			 => TRUE,
			],
			'ket_carousel'	=> [
				'type'           => 'text',
				'null'			 => TRUE,
			],
			'file_carousel'	=> [
				'type'           => 'text',
				'comment'		 => 'File foto carousel',
			],
			'active'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>active; 0=>not active',
				'default'        => '1',
			],
		]);

		$this->forge->addKey('id_carousel', TRUE);
		$this->forge->createTable('tbl_carousel', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_carousel');
	}
}
