<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRekomendasiPengabdian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_rpb'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'no_rpb'  	 => [
				'type'           => 'varchar',
				'constraint'     => '20',
			],
			'id_user_pemohon'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'penanggung_jawab'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'lokasi'       		 => [
				'type'           => 'text',
			],
			'tujuan'       		 => [
				'type'           => 'TEXT',
			],
			'file_lampiran'      => [
				'type'           => 'TEXT',
			],
			'tgl_pelaksanaan_mulai'    => [
				'type'           => 'DATE',
			],
			'tgl_pelaksanaan_akhir'    => [
				'type'           => 'DATE',
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

		$this->forge->addKey('id_rpb', TRUE);
		$this->forge->addForeignKey('id_user_pemohon', 'tbl_user_pemohon', 'id_user_pemohon', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tbl_rekomendasi_pengabdian', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_rekomendasi_pengabdian');
	}
}
