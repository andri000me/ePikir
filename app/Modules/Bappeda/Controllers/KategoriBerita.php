<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\KategoriBModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class KategoriBerita extends BaseController
{
    private $m_kb;
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_kb = new KategoriBModel();
    }

    public function index()
    {
        $this->v_data['active'] = '7';
        $this->v_data['kb'] = $this->m_kb->orderBy('id_kb DESC')->getData(null, null);

        return views('content/kategoriberita/list_kb', 'Bappeda', $this->v_data);
    }

    #rencana kerja proses crud
    public function addKb()
    {
        $this->v_data['active'] = '7';

        return views('content/kategoriberita/form_kb', 'Bappeda', $this->v_data);
    }

    public function editKb($id)
    {
        $this->v_data['kb'] = $this->m_kb->getData(decode($id));
        $this->v_data['active']  = '7';

        return views('content/kategoriberita/form_kb', 'Bappeda', $this->v_data);
    }
    #end rencana kerja

    public function saveKb()
    {

        $post = $this->request->getPost();

        if ($post) {
            $data = [
                'nama_kategori' => $post['nama_kategori'],
                'active' => 1
            ];

            // Jika post id_kb maka update
            if ($post['id_kb'] != '') {
                $data['id_kb'] = decode($post['id_kb']);
            }

            if ($this->m_kb->save($data)) {
                alert_success('Berhasil simpan data');
            } else {
                alert_failed('Gagal simpan data');
            }

            return redirect()->to(base_url('bappeda/kategoriberita'));
        } else {
            // alert_failed('Gagal Menambah user');
            // return redirect()->to(base_url('bappeda/kategoriberita'));
            throw PageNotFoundException::forPageNotFound();
        }
    }

    public function deleteKb($id)
    {
        if ($id != null) {
            $id_kb = decode($id);

            $delete_data = $this->m_kb->delete(['id_kb' => $id_kb]);

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

            $simpan = $this->m_kb->set(['active' => $active])->where(['id_kb' => decode($id)])->update();
            if ($simpan) {
                if ($active == 1) {
                    $alert = 'Kategori berita diaktifkan';
                } else {
                    $alert = 'Kategori berita dinon-aktifkan';
                }
                $res = ['respons' => true, 'alert' => $alert];
            } else {
                $res = ['respons' => false, 'alert' => 'Gagal ubah status Kategori berita'];
            }
        } else {
            $res = ['respons' => false, 'alert' => 'Ubah status Kategori berita gagal'];
        }
        echo json_encode($res);
    }
}
