<?php

namespace App\Modules\Dpmptsp\Models;

class MenuModel
{
    public function getMenu()
    {
        $data = [
            array(
                "header"    => null,
                "title"     => "Dashboard",
                "url"       => base_url('dpmptsp/dashboard'),
                "index"     => 1,
                "icon"      => 'la la-home',
                "child"     => null,
            ),
            array(
                "header"    => null,
                "title"     => "Penelitian",
                "url"       => '#',
                "index"     => 2,
                "icon"      => 'la la-search',
                "bubble"    => 'ipl',
                "child"     => array(
                    array(
                        "title"    => "Diajukan",
                        "url"       => base_url('dpmptsp/penelitian/diajukan'),
                        "index"     => 2.1,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => 'ipl_masuk',
                    ),
                    array(
                        "title"    => "Diproses",
                        "url"       => base_url('dpmptsp/penelitian/diproses'),
                        "index"     => 2.2,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => 'ipl_proses',
                    ),
                    array(
                        "title"    => "Selesai",
                        "url"       => base_url('dpmptsp/penelitian/selesai'),
                        "index"     => 2.3,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => null,
                    ),
                ),
            ),
            array(
                "header"    => null,
                "title"     => "Pengabdian",
                "url"       => base_url('dpmptsp/pengabdian'),
                "index"     => 3,
                "icon"      => 'la la-hand-paper-o',
                "bubble"    => 'ipb',
                "child"     => array(
                    array(
                        "title"    => "Diajukan",
                        "url"       => base_url('dpmptsp/pengabdian/diajukan'),
                        "index"     => 3.1,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => 'ipb_masuk',
                    ),
                    array(
                        "title"    => "Diproses",
                        "url"       => base_url('dpmptsp/pengabdian/diproses'),
                        "index"     => 3.2,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => 'ipb_proses',
                    ),
                    array(
                        "title"    => "Selesai",
                        "url"       => base_url('dpmptsp/pengabdian/selesai'),
                        "index"     => 3.3,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => null,
                    ),
                ),
            ),
            array(
                "header"    => 'Master Data',
            ),
            array(
                "header"    => null,
                "title"     => "Daftar Pejabat",
                "url"       => base_url('dpmptsp/pejabat'),
                "index"     => 4,
                "icon"      => 'la la-users',
                "child"     => null,
            ),
        ];

        return $data;
    }
}
