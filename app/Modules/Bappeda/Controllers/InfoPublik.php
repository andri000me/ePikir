<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\InfoPublikModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class InfoPublik extends BaseController
{
    private $m_info;
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_info = new InfoPublikModel();
    }

    public function index()
    {
        $this->v_data['active'] = '5.3';
        $this->v_data['info'] = $this->m_info->orderBy('id_info', 'DESC')->getData();

        return views('content/info/info', 'Bappeda', $this->v_data);
    }

    #info proses crud
    public function addInfo()
    {
        $this->v_data['active'] = '5.3';

        return views('content/info/form_info', 'Bappeda', $this->v_data);
    }

    public function editInfo($id)
    {
        $this->v_data['active']   = '5.3';
        $this->v_data['info'] = $this->m_info->getData(decode($id));
        return views('content/info/form_info', 'Bappeda', $this->v_data);
    }
    #end info crud

    public function saveInfo()
    {
        helper('upload');

        $post = $this->request->getPost();

        if ($post) {
            $data = [
                'id_user' => session('id_user'),
                'nama_info' => $post['nama_info'],
                'isi_info' => $post['isi_info'],
                // 'file_info' => $upload['data'],
                'waktu_update' => date("Y-m-d H:i:s"),
                'active' => 1
            ];

            $file = $this->request->getFile('file_info');

            // Jika post id_info maka update
            if ($post['id_info'] != '') {
                $data['id_info'] = decode($post['id_info']);
                $data_info = $this->m_info->getData($data['id_info']);

                $data['file_info'] = $data_info->file_info;

                // Cek apakah post file kosong/tidak
                if ($file != '') {
                    $upload = upload_files($file, FCPATH . 'upload/info');

                    if ($upload['respons']) {
                        $data['file_info'] = $upload['data'];

                        $file_location = 'upload/info/' . $data_info->file_info;
                        if (realpath($file_location)) {
                            unlink(FCPATH . $file_location); //hapus file yang akan diupdate
                        }
                    }
                }
            } else {
                $upload = upload_files($file, FCPATH . 'upload/info');

                if ($upload['respons']) {
                    $data['file_info'] = $upload['data'];
                }
            }

            if ($this->m_info->save($data)) {
                alert_success('Berhasil simpan data');
            } else {
                alert_failed('Gagal simpan data');
            }

            return redirect()->to(base_url('bappeda/publikasi/info'));
        } else {
            // alert_failed('Gagal Menambah info');
            // return redirect()->to(base_url('bappeda/publikasi/info'));
            throw PageNotFoundException::forPageNotFound();
        }
    }

    public function deleteInfo($id)
    {
        if ($id != null) {
            $id_info = decode($id);

            $data_info = $this->m_info->getData($id_info);
            $file_location = 'upload/info/' . $data_info->file_info;
            if (realpath($file_location)) {
                unlink(FCPATH . $file_location); //hapus file
            }

            $delete_data = $this->m_info->delete(['id_info' => $id_info]);

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
