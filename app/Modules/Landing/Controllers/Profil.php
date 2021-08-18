<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\ProfilModel;
use App\Modules\Landing\Models\RegulasiModel;

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
        $m_regulasi = new RegulasiModel();

        $this->v_data['regulasi']     = $m_regulasi->getData();
        $this->v_data['active']     = '2.4';

        return views('content/profil/regulasi', 'Landing', $this->v_data);
    }

    public function regulasiDetail($id)
    {
        $m_regulasi = new RegulasiModel();
        $this->v_data['regulasi']     = $m_regulasi->getData(decode($id));
        $this->v_data['active']     = '2.4';
        // $file = $m_regulasi->getData(decode($id))->file_regulasi;
        // var_dump(file_get_contents(base_url('upload/regulasi/'.$file)));
        // exit();

        return views('content/profil/regulasi_detail', 'Landing', $this->v_data);
    }
}
