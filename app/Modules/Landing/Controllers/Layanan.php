<?php

namespace App\Modules\Landing\Controllers;

class Layanan extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function izinPenelitian()
    {

        // $this->v_data['carousel']   = $m_carousel->getData();

        $this->v_data['active']     = '6.1';

        return views('content/layanan/izin_penelitian', 'Landing', $this->v_data);
    }
}
