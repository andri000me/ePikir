<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\ProfilModel;

class Profil extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function about()
    {
        $m_profil = new ProfilModel();

        $this->v_data['profil']     = $m_profil->getData()->isi_profil;
        $this->v_data['active']     = '2.1';

        return views('content/profil/about', 'Landing', $this->v_data);
    }

    public function tugasPokok()
    {
        $m_profil = new ProfilModel();

        $this->v_data['profil']     = $m_profil->getData()->tugas_pokok;
        $this->v_data['active']     = '2.2';

        return views('content/profil/tugas', 'Landing', $this->v_data);
    }

    public function strukturOrganisasi()
    {
        $m_profil = new ProfilModel();

        $this->v_data['profil']     = $m_profil->getData()->struktur_organisasi;
        $this->v_data['active']     = '2.3';

        return views('content/profil/struktur', 'Landing', $this->v_data);
    }

    public function regulasi()
    {
        $m_profil = new ProfilModel();

        $this->v_data['profil']     = $m_profil->getData()->struktur_organisasi;
        $this->v_data['active']     = '2.4';

        return views('content/profil/regulasi', 'Landing', $this->v_data);
    }
}
