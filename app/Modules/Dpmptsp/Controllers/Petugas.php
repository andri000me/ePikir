<?php

namespace App\Modules\Dpmptsp\Controllers;

use App\Modules\Dpmptsp\Models\PetugasModel;

class Petugas extends BaseController
{
    protected $m_petugas;
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_petugas = new PetugasModel();
    }

    public function index()
    {
        $this->v_data['petugas']     = $this->m_petugas->getData();
        $this->v_data['active']     = '4';

        return views('content/petugas/petugas', 'Dpmptsp', $this->v_data);
    }

    public function simpanData()
    {
        $post = $this->request->getPost();
        if ($post) {
            $data_petugas = array(
                'id_role'         => session('id_role'),
                'nama_petugas'    => $post['nama_petugas'],
                'nip_petugas'     => $post['nip_petugas'],
                'pangkat_petugas' => $post['pangkat_petugas'],
                'jabatan_petugas' => $post['jabatan_petugas'],
                'active'          => 1,
            );
            if ($post['id_petugas'] != '') {
                $data_petugas['id_petugas'] = decode($post['id_petugas']);
            }
            $save_data = $this->m_petugas->save($data_petugas);
            if ($save_data) {
                alert_success('Data pejabat berhasil disimpan.');
            } else {
                alert_failed('Data pejabat gagal disimpan');
            }
            return redirect()->to(base_url('dpmptsp/pejabat'));
        } else {
            return redirect()->to(base_url('dpmptsp/pejabat'));
        }
    }

    public function hapusData($id = null)
    {
        if ($id != null) {
            $id_petugas = decode($id);

            $delete_data = $this->m_petugas->delete(['id_petugas' => $id_petugas]);

            if ($delete_data) {
                $res = ['respons'   => true, 'alert' => 'Data berhasil dihapus'];
            } else {
                $res = ['respons'   => false, 'alert' => 'Data gagal dihapus'];
            }
            echo json_encode($res);
        } else {
            $res = ['respons'   => false, 'alert' => 'No process data'];
            echo json_encode($res);
        }
    }
}
