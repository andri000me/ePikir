<?php

namespace App\Modules\Dpmptsp\Controllers;

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
            'ipl' => array(
                'masuk' => $this->m_ipl->where('status >=', 1)->where($where_bln)->countAllResults(),
                'diterima' => $this->m_ipl->where('status', 3)->where($where_bln)->countAllResults(),
                'ditolak' => $this->m_ipl->where('status', 4)->where($where_bln)->countAllResults(),
            ),
            'ipb' => array(
                'masuk' => $this->m_ipb->where('status >=', 1)->where($where_bln)->countAllResults(),
                'diterima' => $this->m_ipb->where('status', 3)->where($where_bln)->countAllResults(),
                'ditolak' => $this->m_ipb->where('status', 4)->where($where_bln)->countAllResults(),
            ),
        );
        $this->v_data['tot_per_thn'] = array(
            'ipl' => array(
                'masuk' => $this->m_ipl->where('status >=', 1)->where($where_thn)->countAllResults(),
                'diterima' => $this->m_ipl->where('status', 3)->where($where_thn)->countAllResults(),
                'ditolak' => $this->m_ipl->where('status', 4)->where($where_thn)->countAllResults(),
            ),
            'ipb' => array(
                'masuk' => $this->m_ipb->where('status >=', 1)->where($where_thn)->countAllResults(),
                'diterima' => $this->m_ipb->where('status', 3)->where($where_thn)->countAllResults(),
                'ditolak' => $this->m_ipb->where('status', 4)->where($where_thn)->countAllResults(),
            ),
        );
        $this->v_data['active']     = '1';

        return views('content/dashboard/dashboard', 'Dpmptsp', $this->v_data);
    }
}
