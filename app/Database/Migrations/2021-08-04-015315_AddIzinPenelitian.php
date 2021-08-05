<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIzinPenelitian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_ipl'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'no_ipl'  	 => [
				'type'           => 'varchar',
				'constraint'     => '20',
			],
			'id_rpl'  	 => [
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
				'comment'		 => '1=>Masuk; 2=>Disetujui; 3=>Ditolak',
				'default'        => '1',
			],
		]);

		$this->forge->addKey('id_ipl', TRUE);
		$this->forge->addForeignKey('id_rpl', 'tbl_rekomendasi_penelitian', 'id_rpl', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tbl_izin_penelitian', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_izin_penelitian');
	}
}
