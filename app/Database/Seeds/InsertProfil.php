<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertProfil extends Seeder
{
	public function run()
	{
		$data = array(
			array(
				'id_profil' => 1,
				'isi_profil' => '<p><b>Badan Perencanaan Pembangunan, Penelitian, dan Pengembangan Daerah (Bappeda dan Litbangda)</b> merupakan Satuan Kerja Perangkat Daerah yang berdasarkan Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah menjalankan urusan penunjang. Bappeda dan Litbangda menyelenggarakan urusan pemerintahan di bidang penelitian dan pengembangan, serta bidang perencanaan yang menjadi kewenangan daerah dan tugas pembantuan yang diberikan kepada daerah.</p>

				<p>Bappeda dan Litbangda Kabupaten Magelang dibentuk dengan Peraturan Daerah Kabupaten Magelang Nomor 19 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Magelang yang diikuti dengan Peraturan Bupati Magelang Nomor 65 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Badan Perencanaan Pembangunan Penelitian dan Pengembangan Daerah Kabupaten Magelang. Peraturan Bupati tersebut disahkan pada tanggal 1 Desember 2016. Sebelumnya Bappeda dan Litbangda bernama Badan Perencaaan Pembangunan Daerah (BAPPEDA) namun sejak dikeluarkannya Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintah Daerah maka Kabupaten Magelang menindaklanjutinya dengan Peraturan Daerah dan Peraturan Bupati dan terbentuklah Satuan Kerja Perangkat Daerah Bappeda dan Litbangda.</p>
				
				<p>Struktur organisasi Bappeda dan Litbangda terdiri dari Kepala Bappeda dan Litbangda yang memimpin pelaksanaan tugas dan fungsi serta membawahi sekretariat dan 5 (lima) bidang. Bidang tersebut adalah Bidang Penelitian dan Pengembangan, Bidang Perencanaan, Pengendalian, dan Evaluasi, Bidang Tata Ruang Pengembangan Wilayah dan Infrastruktur, Bidang Ekonomi dan Sumber Daya Alam, Bidang Pemerintahan, Sosial, dan Budaya. Selain itu juga terdapat kelompok jabatan fungsional yang terdiri dari Fungsional Peneliti dan Fungsional Perencana. Kelompok jabatan fungsional bertanggungjawab secara langsung kepada Kepala Bappeda dan Litbangda.</p>
				
				<p>Kantor Bappeda dan Litbangda terletak di dalam Kompleks Setda Kabupaten Magelang dengan alamat Jl. Soekarno Hatta Nomor 59 Kota Mungkid.</p>',

				'tugas_pokok' => '<p>Tugas Bappeda dan Litbangda adalah membantu Bupati Magelang menyelenggarakan urusan pemerintahan di bidang penelitian dan pengembangan, serta bidang perencanaan yang menjadi kewenangan daerah dan tugas pembantuan yang diberikan kepada daerah.</p>

				<p>Sedangkan fungsi Bappeda dan Litbangda adalah:
				<ol type="a">
				<li>perumusan kebijakan teknis urusan penelitian dan pengembangan, urusan perencanaan pengendalian, dan evaluasi perencanaan bidang tata ruang, pengembangan wilayah, infrastruktur, ekonomi, sumber daya alam, pemerintahan, sosial budaya, serta kesekretariatan;</li>
				
				<li>pelaksanaan koordinasi kebijakan teknis urusan penelitian dan pengembangan, urusan perencanaan pengendalian, dan evaluasi perencanaan bidang tata ruang, pengembangan wilayah, infrastruktur, ekonomi, sumber daya alam, pemerintahan, sosial, dan budaya;</li>
				
				<li>pelaksanaan tugas dukungan teknis urusan penelitian dan pengembangan, urusan perencanaan pengendalian, dan evaluasi perencanaan bidang tata ruang, pengembangan wilayah, infrastruktur, ekonomi, sumber daya alam, pemerintahan, sosial, dan budaya;</li>
				
				<li>pembinaan dan pelayanan teknis penyelenggaraan fungsi-fungsi penunjang urusan penelitian dan pengembangan, urusan perencanaan pengendalian, dan evaluasi perencanaan bidang tata ruang, pengembangan wilayah, infrastruktur, ekonomi, sumber daya alam, pemerintahan, sosial, dan budaya;</li>
				
				<li>pelaksanaan administrasi urusan penelitian dan pengembangan, urusan perencanaan pengendalian, dan evaluasi perencanaan bidang tata ruang, pengembangan wilayah, infrastruktur, ekonomi, sumber daya alam, pemerintahan, sosial, dan budaya;</li>
				
				<li>pelaksanaan fungsi kesekretariatan Badan Perencanaan Pembangunan Penelitian dan Pengembangan Daerah;</li>
				
				<li>pelaksanaan Tugas Pembantuan yang diberikan kepada daerah urusan penelitian dan pengembangan, urusan perencanaan pengendalian, dan evaluasi perencanaan bidang tata ruang, pengembangan wilayah, infrastruktur, ekonomi, sumber daya alam, pemerintahan, sosial, dan budaya;</li>
				
				<li>pelaksanaan pemantauan, evaluasi dan pelaporan urusan penelitian dan pengembangan, urusan perencanaan pengendalian, dan evaluasi, perencanaan bidang tata ruang, pengembangan wilayah, infrastruktur, ekonomi, sumber daya alam, pemerintahan, sosial, dan budaya; </li>
				
				<li>pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya.</li>
				</p>',

				'struktur_organisasi' => 'struktur_organisasi.jpg',
				'waktu_update' => date('Y-m-d H:i:s'),
			),
		);

		$this->db->table('tbl_profil')->insertBatch($data);
	}
}
