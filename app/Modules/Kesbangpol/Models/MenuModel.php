<?php

namespace App\Modules\Kesbangpol\Models;

class MenuModel
{
    public function getMenu()
    {
        $data = [
            array(
                "header"    => null,
                "title"     => "Dashboard",
                "url"       => base_url('kesbangpol/dashboard'),
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
                "bubble"    => 'rpl',
                "child"     => array(
                    array(
                        "title"    => "Diajukan",
                        "url"       => base_url('kesbangpol/penelitian/diajukan'),
                        "index"     => 2.1,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => 'rpl_masuk',
                    ),
                    array(
                        "title"    => "Diproses",
                        "url"       => base_url('kesbangpol/penelitian/diproses'),
                        "index"     => 2.2,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => 'rpl_proses',
                    ),
                    array(
                        "title"    => "Selesai",
                        "url"       => base_url('kesbangpol/penelitian/selesai'),
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
                "url"       => base_url('kesbangpol/pengabdian'),
                "index"     => 3,
                "icon"      => 'la la-hand-paper-o',
                "bubble"    => 'rpb',
                "child"     => array(
                    array(
                        "title"    => "Diajukan",
                        "url"       => base_url('kesbangpol/pengabdian/diajukan'),
                        "index"     => 3.1,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => 'rpb_masuk',
                    ),
                    array(
                        "title"    => "Diproses",
                        "url"       => base_url('kesbangpol/pengabdian/diproses'),
                        "index"     => 3.2,
                        "icon"      => null,
                        "child"     => null,
                        "bubble"    => 'rpb_proses',
                    ),
                    array(
                        "title"    => "Selesai",
                        "url"       => base_url('kesbangpol/pengabdian/selesai'),
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
                "url"       => base_url('kesbangpol/pejabat'),
                "index"     => 4,
                "icon"      => 'la la-users',
                "child"     => null,
            ),
        ];

        return $data;
    }
}
