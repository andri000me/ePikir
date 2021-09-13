<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCetakSurat extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_cetak'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_permohonan'	=> [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'jenis_permohonan'	=> [
				'type'           => 'ENUM',
				'constraint'     => ['rpl', 'rpb', 'ipl', 'ipb'],
				'default'        => 'rpl',
			],
			'id_petugas'  	 => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
				'comment'		 => 'Pejabat pemberi ttd',
			],
			'tgl_cetak'     => [
				'type'           => 'date',
				'null'			 => TRUE,
			],
		]);

		$this->forge->addKey('id_cetak', TRUE);
		$this->forge->addForeignKey('id_petugas', 'tbl_petugas', 'id_petugas', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tbl_cetak_surat', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tbl_cetak_surat');
	}
}
