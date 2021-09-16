<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\KategoriGModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class KategoriGaleri extends BaseController
{
    private $m_kg;
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_kg = new KategoriGModel();
    }

    public function index()
    {
        $this->v_data['active'] = '8';
        $this->v_data['kg'] = $this->m_kg->orderBy('id_kg DESC')->getData(null, null);

        return views('content/kategorigaleri/list_kg', 'Bappeda', $this->v_data);
    }

    #rencana kerja proses crud
    public function addKg()
    {
        $this->v_data['active'] = '8';

        return views('content/kategorigaleri/form_kg', 'Bappeda', $this->v_data);
    }

    public function editKg($id)
    {
        $this->v_data['kg'] = $this->m_kg->getData(decode($id));
        $this->v_data['active']  = '8';

        return views('content/kategorigaleri/form_kg', 'Bappeda', $this->v_data);
    }
    #end rencana kerja

    public function saveKg()
    {

        $post = $this->request->getPost();

        if ($post) {
            $data = [
                'nama_kategori' => $post['nama_kategori'],
                'active' => 1
            ];

            // Jika post id_kg maka update
            if ($post['id_kg'] != '') {
                $data['id_kg'] = decode($post['id_kg']);
            }

            if ($this->m_kg->save($data)) {
                alert_success('Berhasil simpan data');
            } else {
                alert_failed('Gagal simpan data');
            }

            return redirect()->to(base_url('bappeda/kategorigaleri'));
        } else {
            // alert_failed('Gagal Menambah user');
            // return redirect()->to(base_url('bappeda/kategorigaleri'));
            throw PageNotFoundException::forPageNotFound();
        }
    }

    public function deleteKg($id)
    {
        if ($id != null) {
            $id_kg = decode($id);

            $delete_data = $this->m_kg->delete(['id_kg' => $id_kg]);

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

    public function changeActive($active = 0, $id = '')
    {
        if ($id != '') {
            if ($active > 1) {
                $active = 1;
            }

            $simpan = $this->m_kg->set(['active' => $active])->where(['id_kg' => decode($id)])->update();
            if ($simpan) {
                if ($active == 1) {
                    $alert = 'Kategori galeri diaktifkan';
                } else {
                    $alert = 'Kategori galeri dinon-aktifkan';
                }
                $res = ['respons' => true, 'alert' => $alert];
            } else {
                $res = ['respons' => false, 'alert' => 'Gagal ubah status Kategori galeri'];
            }
        } else {
            $res = ['respons' => false, 'alert' => 'Ubah status Kategori galeri gagal'];
        }
        echo json_encode($res);
    }
}
