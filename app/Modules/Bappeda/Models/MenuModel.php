<?php

namespace App\Modules\Bappeda\Models;

class MenuModel
{
    public function getMenu()
    {
        $data = [
            array(
                "header"    => null,
                "title"     => "Dashboard",
                "url"       => base_url('bappeda/dashboard'),
                "index"     => 1,
                "icon"      => 'la la-home',
                "child"     => null,
            ),
            array(
                "header"    => null,
                "title"     => "Penelitian",
                "url"       => base_url('bappeda/penelitian'),
                "index"     => 2,
                "icon"      => 'la la-search',
                "child"     => null,
            ),
            array(
                "header"    => null,
                "title"     => "Pengabdian",
                "url"       => base_url('bappeda/pengabdian'),
                "index"     => 3,
                "icon"      => 'la la-hand-paper-o',
                "child"     => null,
            ),
            array(
                "header"    => 'Halaman Utama',
            ),
            array(
                "header"    => null,
                "title"     => "Profil",
                "url"       => '#',
                "index"     => 4,
                "icon"      => 'la la-building',
                "child"     => array(
                    array(
                        "title"    => "Tentang Kami",
                        "url"       => base_url('bappeda/about'),
                        "index"     => '4.1',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Tugas Pokok & Fungsi",
                        "url"       => base_url('bappeda/tugaspokok'),
                        "index"     => '4.2',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Struktur Organisasi",
                        "url"       => base_url('bappeda/organisasi'),
                        "index"     => '4.3',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Regulasi Kelitbangan",
                        "url"       => base_url('bappeda/regulasi'),
                        "index"     => '4.4',
                        "icon"      => null,
                        "child"     => null,
                    ),
                ),
            ),
            array(
                "header"    => null,
                "title"    => "Publikasi",
                "url"       => '#',
                "index"     => 5,
                "icon"      => 'la la-bullhorn',
                "child"     => array(
                    array(
                        "title"    => "SOP Kelitbangan",
                        "url"       => base_url('bappeda/sop'),
                        "index"     => '5.1',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Agenda Kegiatan",
                        "url"       => base_url('bappeda/agenda'),
                        "index"     => '5.2',
                        "icon"      => null,
                        "child"     => array(
                            array(
                                "title"    => "Tambah Data",
                                "url"       => base_url('bappeda/agenda/add'),
                                "index"     => '5.2.1',
                                "icon"      => null,
                                "child"     => null,
                            ),
                            array(
                                "title"    => "List Data",
                                "url"       => base_url('bappeda/agenda/list'),
                                "index"     => '5.2.2',
                                "icon"      => null,
                                "child"     => null,
                            ),
                        ),
                    ),
                    array(
                        "title"    => "Rencana Kerja",
                        "url"       => base_url('bappeda/rencanakerja'),
                        "index"     => '5.3',
                        "icon"      => null,
                        "child"     => array(
                            array(
                                "title"    => "Tambah Data",
                                "url"       => base_url('bappeda/rencanakerja/add'),
                                "index"     => '5.3.1',
                                "icon"      => null,
                                "child"     => null,
                            ),
                            array(
                                "title"    => "List Data",
                                "url"       => base_url('bappeda/rencanakerja/list'),
                                "index"     => '5.3.2',
                                "icon"      => null,
                                "child"     => null,
                            ),
                        ),
                    ),
                    array(
                        "title"    => "Berita/Artikel",
                        "url"       => base_url('bappeda/berita'),
                        "index"     => '5.4',
                        "icon"      => null,
                        "child"     => array(
                            array(
                                "title"    => "Tambah Data",
                                "url"       => base_url('bappeda/berita/add'),
                                "index"     => '5.4.1',
                                "icon"      => null,
                                "child"     => null,
                            ),
                            array(
                                "title"    => "List Data",
                                "url"       => base_url('bappeda/berita/list'),
                                "index"     => '5.4.2',
                                "icon"      => null,
                                "child"     => null,
                            ),
                        ),
                    ),
                    array(
                        "title"    => "Dokumentasi Kegiatan",
                        "url"       => base_url('bappeda/galeri'),
                        "index"     => '5.5',
                        "icon"      => null,
                        "child"     => array(
                            array(
                                "title"    => "Tambah Data",
                                "url"       => base_url('bappeda/galeri/add'),
                                "index"     => '5.5.1',
                                "icon"      => null,
                                "child"     => null,
                            ),
                            array(
                                "title"    => "List Data",
                                "url"       => base_url('bappeda/galeri/list'),
                                "index"     => '5.5.2',
                                "icon"      => null,
                                "child"     => null,
                            ),
                        ),
                    ),
                ),
            ),
        ];

        return $data;
    }
}
