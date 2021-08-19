<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\ProfilModel;

class Publikasi extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function sopLitbang()
    {
        $m_profil = new ProfilModel();

        $this->v_data['profil']     = $m_profil->getData()->sop_litbang;
        $this->v_data['active']     = '3.1';

        return views('content/publikasi/sop', 'Landing', $this->v_data);
    }

    public function agenda()
    {
        $m_profil = new ProfilModel();

        $this->v_data['profil']     = $m_profil->getData()->sop_litbang;
        $this->v_data['active']     = '3.2';

        return views('content/publikasi/agenda', 'Landing', $this->v_data);
    }

}