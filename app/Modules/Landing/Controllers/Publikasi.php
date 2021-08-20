<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\AgendaModel;
use App\Modules\Landing\Models\BeritaModel;
use App\Modules\Landing\Models\KategoriBeritaModel;
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
        $m_agenda = new AgendaModel();

        $this->v_data['agenda_bln']     = $m_agenda->getData('bulan');
        $this->v_data['active']         = '3.2';

        return views('content/publikasi/agenda', 'Landing', $this->v_data);
    }

    public function agendaCalendar($time = false)
    {
        $m_agenda = new AgendaModel();

        $agenda_thn = $m_agenda->getData('tahun');

        $agenda = array();
        foreach ($agenda_thn as $val) {
            $agenda[] = [
                'title' => $val->judul_agenda,
                'start' => date('Y-m-d', strtotime($val->waktu_awal)) . ($time ? 'T' . date('H:i:s', strtotime($val->waktu_awal)) : ''),
                'end'   => ($time ? date('Y-m-d', strtotime($val->waktu_akhir)) : (date('Y-m-d', strtotime($val->waktu_awal)) == date('Y-m-d', strtotime($val->waktu_akhir)) ? date('Y-m-d', strtotime($val->waktu_akhir)) : date('Y-m-d', strtotime($val->waktu_akhir . '+1 days')))) . ($time ? 'T' . date('H:i:s', strtotime($val->waktu_akhir)) : ''),
            ];
        }

        $this->v_data['agenda_thn']     = $agenda;
        $this->v_data['active']         = '3.2';

        return views('content/publikasi/calendar', 'Landing', $this->v_data);
    }

    public function berita()
    {
        helper('text');
        $m_berita = new BeritaModel();
        $m_kb = new KategoriBeritaModel();

        $this->v_data['berita']    = $m_berita->getData(null, 1, true);
        $this->v_data['kategori']  = $m_kb->getData();
        $this->v_data['pager']     = $m_berita->pager;
        $this->v_data['active']    = '3.4';

        return views('content/publikasi/berita', 'Landing', $this->v_data);
    }
}
