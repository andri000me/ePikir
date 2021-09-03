<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRekomendasiPenelitian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_rpl'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'no_rpl'  	 => [
				'type'           => 'varchar',
				'constraint'     => '20',
			],
			'id_user_pemohon'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'lokasi'       		 => [
				'type'           => 'text',
			],
			'tujuan'       		 => [
				'type'           => 'TEXT',
			],
			'penanggung_jawab'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
			'nama_instansi'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '200'
			],
			'no_surat_permohonan'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '45'
			],
			'tgl_surat_permohonan'    => [
				'type'           => 'DATE',
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

		$this->forge->addKey('id_rpl', TRUE);
		$this->forge->addForeignKey('id_user_pemohon', 'tbl_user_pemohon', 'id_user_pemohon', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tbl_rekomendasi_penelitian', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_rekomendasi_penelitian');
	}
}
