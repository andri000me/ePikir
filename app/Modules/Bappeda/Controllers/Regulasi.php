<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\RegulasiModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Regulasi extends BaseController
{
  private $m_regulasi;
  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->m_regulasi = new RegulasiModel();
  }

  public function index()
  {
    $this->v_data['active'] = '4.4';
    $this->v_data['regulasi'] = $this->m_regulasi->orderBy('id_regulasi', 'DESC')->getData();

    return views('content/regulasi/regulasi', 'Bappeda', $this->v_data);
  }

  #regulasi proses crud
  public function addRegulasi()
  {
    $this->v_data['active'] = '4.4';

    return views('content/regulasi/form_regulasi', 'Bappeda', $this->v_data);
  }

  public function editRegulasi($id)
  {
    $this->v_data['active']   = '4.4';
    $this->v_data['regulasi'] = $this->m_regulasi->getData(decode($id));
    return views('content/regulasi/form_regulasi', 'Bappeda', $this->v_data);
  }
  #end regulasi crud

  public function saveData()
  {
    helper('upload');

    $post = $this->request->getPost();

    if ($post) {
      $data = [
        'id_user' => session('id_user'),
        'nama_regulasi' => $post['nama_regulasi'],
        'isi_regulasi' => $post['isi_regulasi'],
        // 'file_regulasi' => $upload['data'],
        'waktu_update' => date("Y-m-d H:i:s"),
        'active' => 1
      ];

      $file = $this->request->getFile('file_regulasi');

      // Jika post id_regulasi maka update
      if ($post['id_regulasi'] != '') {
        $data['id_regulasi'] = decode($post['id_regulasi']);
        $data_regulasi = $this->m_regulasi->getData($data['id_regulasi']);

        $data['file_regulasi'] = $data_regulasi->file_regulasi;

        // Cek apakah post file kosong/tidak
        if ($file != '') {
          $upload = upload_files($file, FCPATH . 'upload/regulasi');

          if ($upload['respons']) {
            $data['file_regulasi'] = $upload['data'];

            $file_location = 'upload/regulasi/' . $data_regulasi->file_regulasi;
            if (realpath($file_location)) {
              unlink(FCPATH . $file_location); //hapus file yang akan diupdate
            }
          }
        }
      } else {
        $upload = upload_files($file, FCPATH . 'upload/regulasi');

        if ($upload['respons']) {
          $data['file_regulasi'] = $upload['data'];
        }
      }

      if ($this->m_regulasi->save($data)) {
        alert_success('Berhasil simpan data');
      } else {
        alert_failed('Gagal simpan data');
      }

      return redirect()->to(base_url('bappeda/profil/regulasi'));
    } else {
      // alert_failed('Gagal Menambah Regulasi');
      // return redirect()->to(base_url('bappeda/profil/regulasi'));
      throw PageNotFoundException::forPageNotFound();
    }
  }

  public function deleteRegulasi($id)
  {
    if ($id != null) {
      $id_regulasi = decode($id);

      $data_regulasi = $this->m_regulasi->getData($id_regulasi);
      $file_location = 'upload/regulasi/' . $data_regulasi->file_regulasi;
      if (realpath($file_location)) {
        unlink(FCPATH . $file_location); //hapus file
      }

      $delete_data = $this->m_regulasi->delete(['id_regulasi' => $id_regulasi]);

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
