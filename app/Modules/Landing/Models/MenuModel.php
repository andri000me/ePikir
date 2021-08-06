<?php namespace App\Modules\Landing\Models;

class MenuModel
{
    public function getMenu()
    {
        $data = [
            array(
                "section"   => null,
                "title"    => "Beranda",
                "url"       => "landing/home",
                "index"     => 1,
                "icon"      => null,
                "child"     => null,
            ),
            array(
                "section"   => null,
                "title"    => "Profil",
                "url"       => 'javascript:void(0)',
                "index"     => 2,
                "icon"      => null,
                "child"     => array(
                    array(
                        "title"    => "Definisi",
                        "url"       => 'landing/definisi',
                        "index"     => 2.1,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Tugas Pokok & Fungsi",
                        "url"       => 'landing/tugaspokok',
                        "index"     => 2.2,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Struktur Organisasi",
                        "url"       => 'landing/organisasi',
                        "index"     => 2.3,
                        "icon"      => null,
                        "child"     => null,
                    ),
                ),
            ),
            array(
                "section"   => null,
                "title"    => "Publikasi",
                "url"       => 'javascript:void(0)',
                "index"     => 3,
                "icon"      => null,
                "child"     => array(
                    array(
                        "title"    => "SOP Kelitbangan",
                        "url"       => 'landing/sop',
                        "index"     => 3.1,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Agenda Kegiatan",
                        "url"       => 'landing/agenda',
                        "index"     => 3.2,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Rencana Kerja",
                        "url"       => 'landing/rencanakerja',
                        "index"     => 3.3,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Berita/Artikel",
                        "url"       => 'landing/berita',
                        "index"     => 3.4,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Dokumentasi Kegiatan",
                        "url"       => 'landing/galeri',
                        "index"     => 3.5,
                        "icon"      => null,
                        "child"     => null,
                    ),
                ),
            ),
            array(
                "section"   => null,
                "title"    => "Kelitbangan",
                "url"       => 'javascript:void(0)',
                "index"     => 4,
                "icon"      => null,
                "child"     => array(
                    array(
                        "title"    => "Hasil Penelitian",
                        "url"       => 'landing/hasilpenelitian',
                        "index"     => 4.1,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Hasil Inovasi",
                        "url"       => 'landing/hasilinovasi',
                        "index"     => 4.2,
                        "icon"      => null,
                        "child"     => null,
                    ),
                ),
            ),
            array(
                "section"   => null,
                "title"    => "Forum Komunikasi",
                "url"       => 'javascript:void(0)',
                "index"     => 5,
                "icon"      => null,
                "child"     => array(
                    array(
                        "title"    => "Usulan Penelitian",
                        "url"       => 'landing/usulanpenelitian',
                        "index"     => 5.1,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Usulan Inovasi Daerah",
                        "url"       => 'landing/usulaninovasi',
                        "index"     => 5.2,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Input Hasil Kelitbangan Perangkat Daerah",
                        "url"       => 'landing/inputhasilkpd',
                        "index"     => 5.3,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Input Hasil Kelitbangan Stakeholder",
                        "url"       => 'landing/inputhasilsh',
                        "index"     => 5.4,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Kerjasama Penelitian",
                        "url"       => 'landing/kerjasama',
                        "index"     => 5.5,
                        "icon"      => null,
                        "child"     => null,
                    ),
                ),
            ),
            array(
                "section"   => null,
                "title"    => "Layanan",
                "url"       => 'javascript:void(0)',
                "index"     => 6,
                "icon"      => null,
                "child"     => array(
                    array(
                        "title"    => "Izin Penelitian",
                        "url"       => 'landing/izinpenelitian',
                        "index"     => 6.1,
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Izin Pengabdian Masyarakat",
                        "url"       => 'landing/izinpengabdian',
                        "index"     => 6.2,
                        "icon"      => null,
                        "child"     => null,
                    ),
                ),
            ),
            array(
                "section"   => null,
                "title"    => "Klinik Penelitian",
                "url"       => "landing/klinik",
                "index"     => 7,
                "icon"      => null,
                "child"     => null,
            ),
        ];

        return $data;
    }
}