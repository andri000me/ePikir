<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKlinikPenelitian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_kpl'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_ipl'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'comment'		 => 'User yg membuat',
			],
			'jenis_permohonan'	=> [
				'type'           => 'ENUM',
				'constraint'     => ['data', 'wawancara', 'dll'],
				'default'        => 'data',
			],
			'keterangan'   =>  [
				'type'           => 'TEXT',
				'null'			 => TRUE,
				'comment'		 => 'Deskripsi singkat terkait permohonan',
			],
			'waktu_pengajuan'	=> [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
			'waktu_verifikasi'   => [
				'type'           => 'datetime',
				'null'			 => TRUE,
			],
			'status'   => [
				'type'           => 'tinyint',
				'constraint'     => 1,
				'comment'		 => '1=>Masuk; 2=>Disetujui; 3=>Ditolak',
			],
			
		]);

		$this->forge->addKey('id_kpl', TRUE);
		$this->forge->addForeignKey('id_ipl','tbl_izin_penelitian','id_ipl','CASCADE','CASCADE');
		$this->forge->createTable('tbl_klinik_penelitian', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_klinik_penelitian');
	}
}
