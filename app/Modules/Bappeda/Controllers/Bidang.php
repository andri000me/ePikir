<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\BidangModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Bidang extends BaseController
{
    private $m_bidang;
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_bidang = new BidangModel();
    }

    public function index()
    {
        helper('text');
        $this->v_data['active'] = '11';
        $this->v_data['bidang'] = $this->m_bidang->orderBy('id_bidang', 'DESC')->getData(null, 3);

        return views('content/bidang/list_bidang', 'Bappeda', $this->v_data);
    }

    public function addBidang()
    {
        $this->v_data['active'] = '11';

        return views('content/bidang/form_bidang', 'Bappeda', $this->v_data);
    }

    public function editBidang($id)
    {
        $this->v_data['active'] = '11';
        $this->v_data['bidang'] = $this->m_bidang->getData(decode($id));
        $this->v_data['myid']   = $id;

        return views('content/bidang/form_bidang', 'Bappeda', $this->v_data);
    }

    public function changeActive($active = 0, $id = '')
    {
        if ($id != '') {
            if ($active > 1) {
                $active = 1;
            }

            $simpan = $this->m_bidang->set(['active' => $active])->where(['id_bidang' => decode($id)])->update();
            if ($simpan) {
                if ($active == 1) {
                    $alert = 'Bidang diaktifkan';
                } else {
                    $alert = 'Bidang dinon-aktifkan';
                }
                $res = ['respons' => true, 'alert' => $alert];
            } else {
                $res = ['respons' => false, 'alert' => 'Gagal ubah status bidang'];
            }
        } else {
            $res = ['respons' => false, 'alert' => 'Ubah status bidang gagal'];
        }
        echo json_encode($res);
    }

    public function saveBidang()
    {

        $post = $this->request->getPost();

        if ($post) {
            $data = [
                'nama_bidang'   => $post['nama_bidang'],
                'ket_bidang'    => $post['ket_bidang'],
                'icon_bidang'   => $post['icon_bidang'],
                'active'        => 1
            ];

            // Jika post id_bidang maka update
            if ($post['id_bidang'] != '') {
                $data['id_bidang'] = decode($post['id_bidang']);
            }

            $save = $this->m_bidang->save($data);

            if ($save) {
                alert_success('Berhasil simpan data');
            } else {
                alert_failed('Gagal simpan data');
            }

            return redirect()->to(base_url('bappeda/bidang'));
        } else {
            // alert_failed('Gagal simpan data');
            // return redirect()->to(base_url('bappeda/bidang'));
            throw PageNotFoundException::forPageNotFound();
        }
    }

    public function deletebidang($id)
    {
        if ($id != null) {
            $id_bidang = decode($id);

            $delete_data = $this->m_bidang->delete(['id_bidang' => $id_bidang]);

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
