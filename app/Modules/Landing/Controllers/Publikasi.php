<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\AgendaModel;
use App\Modules\Landing\Models\BeritaModel;
use App\Modules\Landing\Models\GaleriModel;
use App\Modules\Landing\Models\InfoPublikModel;
use App\Modules\Landing\Models\KategoriBeritaModel;
use App\Modules\Landing\Models\KategoriGaleriModel;
use App\Modules\Landing\Models\ProfilModel;
// use App\Modules\Landing\Models\RenjaModel;

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

        $profil = '';
        if ($m_profil->getData() != null) {
            $profil = $m_profil->getData()->sop_litbang;
        }

        $this->v_data['profil']     = $profil;
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

    // public function rencanaKerja()
    // {
    //     $m_renja = new RenjaModel();
    //     $this->v_data['renja']     = $m_renja->getData();
    //     $this->v_data['active']    = '3.3';

    //     return views('content/publikasi/renja', 'Landing', $this->v_data);
    // }

    public function infoPublik()
    {
        $m_info = new InfoPublikModel();

        $this->v_data['info']   = $m_info->orderBy('id_info', 'DESC')->getData();
        $this->v_data['active']     = '3.3';

        return views('content/publikasi/info', 'Landing', $this->v_data);
    }

    public function infoPublikDetail($id)
    {
        $m_info = new InfoPublikModel();
        $this->v_data['info']   = $m_info->getData(decode($id));
        $this->v_data['active']     = '3.3';

        return views('content/publikasi/info_detail', 'Landing', $this->v_data);
    }

    public function berita()
    {
        helper('text');
        $m_berita = new BeritaModel();
        $m_kb = new KategoriBeritaModel();

        $get_search =  $this->request->getGet('search');

        if ($get_search != null) {
            $search = $get_search;
        } else {
            $search = null;
        }

        $get_kategori =  $this->request->getGet('kategori');

        if ($get_kategori != null) {
            $where = array(
                'tb.id_kb' => decode($get_kategori),
            );
        } else {
            $where = null;
        }

        $this->v_data['berita']             = $m_berita->getData(null, 6, true, $search, $where);
        $this->v_data['berita_count']       = $m_berita->getData(null, 0, false, $search, $where, 'DESC', true);
        $this->v_data['berita_terkini']     = $m_berita->getData(null, 5);
        $this->v_data['kategori']           = $m_kb->getData();
        $this->v_data['pager']              = $m_berita->pager;
        $this->v_data['search']             = $search;
        $this->v_data['select_kategori']    = $get_kategori;
        $this->v_data['active']             = '3.4';

        return views('content/publikasi/berita', 'Landing', $this->v_data);
    }

    public function beritaDetail($id = null)
    {
        helper('text');
        $m_berita = new BeritaModel();
        $m_kb = new KategoriBeritaModel();

        if ($id != null) {
            $idb = decode($id);
        } else {
            $idb = 1;
        }

        $data_berita = $m_berita->getData($idb);

        $meta = array(
            'title'         => character_limiter($data_berita->judul_berita, 75, '...'),
            'description'   => character_limiter($data_berita->isi_berita, 120, '...'),
            'image'         => ($data_berita->file_foto != null ? (!file_exists(realpath('upload/berita/' . $data_berita->file_foto))) ? base_url('assets/img/noimage/no_img3.jpg') : base_url('upload/berita/' . $data_berita->file_foto) : base_url('assets/img/noimage/no_img3.jpg')),
        );

        $this->v_data['berita']         = $data_berita;
        $this->v_data['berita_terkini'] = $m_berita->getData(null, 5);
        $this->v_data['berita_next']    = $m_berita->getData(null, 1, false, null, "id_berita > $idb", 'ASC');
        $this->v_data['berita_prev']    = $m_berita->getData(null, 1, false, null, "id_berita < $idb", 'DESC');
        $this->v_data['kategori']       = $m_kb->getData();
        $this->v_data['pager']          = $m_berita->pager;
        $this->v_data['meta']           = $meta;
        $this->v_data['search']         = null;
        $this->v_data['active']         = '3.4';

        return views('content/publikasi/berita_detail', 'Landing', $this->v_data);
    }

    public function galeri()
    {
        helper('text');
        $m_galeri = new GaleriModel();
        $m_kg = new KategoriGaleriModel();
        $this->v_data['galeri']    = $m_galeri->getData();
        $this->v_data['kategori']  = $m_kg->getData();
        $this->v_data['active']    = '3.5';

        return views('content/publikasi/galeri', 'Landing', $this->v_data);
    }
}
