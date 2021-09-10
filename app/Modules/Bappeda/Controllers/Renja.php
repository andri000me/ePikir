<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\RenjaModel;

class Renja extends BaseController
{
  private $m_renja;
  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->m_renja = new RenjaModel();
  }

  public function index()
  {
    $this->v_data['active'] = '5.3';
    $this->v_data['renja'] = $this->m_renja->orderBy('tahun_rk DESC', 'id_rk DESC')->getData();

    return views('content/rencanakerja/renja', 'Bappeda', $this->v_data);
  }

  #rencana kerja proses crud
  public function addRenja()
  {
    $this->v_data['active'] = '5.3';

    return views('content/rencanakerja/form_renja', 'Bappeda', $this->v_data);
  }

  public function editRenja($id)
  {
    $this->v_data['active']   = '5.3';
    $this->v_data['renja'] = $this->m_renja->getData(decode($id));

    return views('content/rencanakerja/form_renja', 'Bappeda', $this->v_data);
  }
  #end rencana kerja

  public function saveRenja()
  {
    helper('upload');

    $post = $this->request->getPost();

    if ($post) {
      $data = [
        'id_user' => session('id_user'),
        'tahun_rk' => $post['tahun_rk'],
        // 'file_rk' => $upload['data'],
        'waktu_update' => date("Y-m-d h:i:sa"),
        'active' => 1
      ];

      $file = $this->request->getFile('file_rk');

      // Jika post id_rk maka update
      if ($post['id_rk'] != '') {
        $data['id_rk'] = decode($post['id_rk']);
        $data_renja = $this->m_renja->getData($data['id_rk']);

        $data['file_rk'] = $data_renja->file_rk;

        // Cek apakah post file kosong/tidak
        if ($file != '') {
          $upload = upload_files($file, FCPATH . 'upload/renja');

          if ($upload['respons']) {
            $data['file_rk'] = $upload['data'];

            $file_location = 'upload/renja/' . $data_renja->file_rk;
            if (realpath($file_location)) {
              unlink(FCPATH . $file_location); //hapus file yang akan diupdate
            }
          }
        }
      } else {
        $upload = upload_files($file, FCPATH . 'upload/renja');

        if ($upload['respons']) {
          $data['file_rk'] = $upload['data'];
        }
      }

      if ($this->m_renja->save($data)) {
        alert_success('Berhasil simpan data');
      } else {
        alert_failed('Gagal simpan data');
      }

      return redirect()->to(base_url('bappeda/publikasi/renja'));
    } else {
      alert_failed('Gagal Menambah renja');
      return redirect()->to(base_url('bappeda/publikasi/renja'));
    }
  }

  public function deleteRenja($id)
  {
    if ($id != null) {
      $id_rk = decode($id);

      $data_renja = $this->m_renja->getData($id_rk);
      $file_location = 'upload/renja/' . $data_renja->file_rk;
      if (realpath($file_location)) {
        unlink(FCPATH . $file_location); //hapus file
      }

      $delete_data = $this->m_renja->delete(['id_rk' => $id_rk]);

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
