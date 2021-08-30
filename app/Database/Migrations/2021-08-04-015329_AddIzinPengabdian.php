<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIzinPengabdian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_ipb'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'no_ipb'  	 => [
				'type'           => 'varchar',
				'constraint'     => '20',
			],
			'id_rpb'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'file_lampiran'      => [
				'type'           => 'TEXT',
			],
			'waktu_pengajuan'    => [
				'type'           => 'datetime',
			],
			'waktu_verifikasi'   => [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
			'status'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>Masuk; 2=>Diproses; 3=>Disetujui; 4=>Ditolak',
				'default'        => '1',
			],
		]);

		$this->forge->addKey('id_ipb', TRUE);
		$this->forge->addForeignKey('id_rpb', 'tbl_rekomendasi_pengabdian', 'id_rpb', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tbl_izin_pengabdian', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_izin_pengabdian');
	}
}
