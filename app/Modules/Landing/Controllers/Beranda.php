<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\CarouselModel;
use App\Modules\Landing\Models\BeritaModel;
use App\Modules\Landing\Models\GaleriModel;

class Beranda extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        helper('text');
        $m_carousel = new CarouselModel();
        $m_berita = new BeritaModel();
        $m_galeri = new GaleriModel();

        $this->v_data['carousel']   = $m_carousel->getData(null, 3);
        $this->v_data['berita']     = $m_berita->getData(null, 5);
        $this->v_data['galeri']     = $m_galeri->getData(null, 6);

        $this->v_data['active']     = '1';

        return views('content/beranda/content', 'Landing', $this->v_data);
    }
}
