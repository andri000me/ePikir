<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\ProfilModel;
use App\Modules\Landing\Models\RegulasiModel;

class Litbang extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function penelitian()
    {
        $m_regulasi = new RegulasiModel();

        $this->v_data['regulasi']     = $m_regulasi->orderBy('id_regulasi', 'DESC')->getData();
        $this->v_data['active']     = '4.1';

        return views('content/litbang/penelitian', 'Landing', $this->v_data);
    }

    public function penelitianDetail($id)
    {
        $m_regulasi = new RegulasiModel();
        $this->v_data['regulasi']     = $m_regulasi->getData(decode($id));
        $this->v_data['active']     = '4.1';

        return views('content/litbang/penelitian_detail', 'Landing', $this->v_data);
    }
}
