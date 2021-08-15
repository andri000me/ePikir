<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\CarouselModel;
use App\Modules\Landing\Models\PengunjungModel;
use App\Modules\Landing\Models\BeritaModel;
use App\Modules\Landing\Models\GaleriModel;

class Landing extends BaseController
{
    private $m_carousel;
    private $m_pengunjung;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_carousel = new CarouselModel();
        $this->m_pengunjung = new PengunjungModel();
        $this->m_berita = new BeritaModel();
        $this->m_galeri = new GaleriModel();
        $this->m_pengunjung->insertData();
    }

    public function index()
    {
        helper('text');
        $this->v_data['carousel']       = $this->m_carousel->getData();
        $this->v_data['p_hari_ini']     = $this->m_pengunjung->getDataHariIni();
        $this->v_data['p_kemarin']      = $this->m_pengunjung->getDataKemarin();
        $this->v_data['p_bln_ini']      = $this->m_pengunjung->getDataBulanIni();
        $this->v_data['p_thn_ini']      = $this->m_pengunjung->getDataTahunIni();
        $this->v_data['p_total']        = $this->m_pengunjung->getDataTotal();
        $this->v_data['berita']         = $this->m_berita->getData(false, 5);
        $this->v_data['galeri']         = $this->m_galeri->getData(false, 6);

        $this->v_data['active']         = '1';

        return views('content/beranda/content', 'Landing', $this->v_data);
    }
}
