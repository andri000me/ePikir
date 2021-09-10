<?php

namespace App\Modules\Kesbangpol\Controllers;

class Dashboard extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $where_bln = ['MONTH(waktu_pengajuan)' => date('n'), 'YEAR(waktu_pengajuan)' => date('Y')];
        $where_thn = ['YEAR(waktu_pengajuan)' => date('Y')];
        $this->v_data['tot_per_bln'] = array(
            'rpl' => array(
                'masuk' => $this->m_rpl->where('status >=', 1)->where($where_bln)->countAllResults(),
                'diterima' => $this->m_rpl->where('status', 3)->where($where_bln)->countAllResults(),
                'ditolak' => $this->m_rpl->where('status', 4)->where($where_bln)->countAllResults(),
            ),
            'rpb' => array(
                'masuk' => $this->m_rpb->where('status >=', 1)->where($where_bln)->countAllResults(),
                'diterima' => $this->m_rpb->where('status', 3)->where($where_bln)->countAllResults(),
                'ditolak' => $this->m_rpb->where('status', 4)->where($where_bln)->countAllResults(),
            ),
        );
        $this->v_data['tot_per_thn'] = array(
            'rpl' => array(
                'masuk' => $this->m_rpl->where('status >=', 1)->where($where_thn)->countAllResults(),
                'diterima' => $this->m_rpl->where('status', 3)->where($where_thn)->countAllResults(),
                'ditolak' => $this->m_rpl->where('status', 4)->where($where_thn)->countAllResults(),
            ),
            'rpb' => array(
                'masuk' => $this->m_rpb->where('status >=', 1)->where($where_thn)->countAllResults(),
                'diterima' => $this->m_rpb->where('status', 3)->where($where_thn)->countAllResults(),
                'ditolak' => $this->m_rpb->where('status', 4)->where($where_thn)->countAllResults(),
            ),
        );
        $this->v_data['active']     = '1';

        return views('content/dashboard/dashboard', 'Kesbangpol', $this->v_data);
    }
}
