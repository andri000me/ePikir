<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\ProfilModel;

class Sop extends BaseController
{
  private $m_profil;
  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->m_profil = new ProfilModel();
  }

  public function index()
  {
    $profil = '';
    if ($this->m_profil->getData() != null) {
      $profil = $this->m_profil->getData()->sop_litbang;
    }
    $this->v_data['active'] = '5.1';
    $this->v_data['image'] = $profil;

    return views('content/sop/sop', 'Bappeda', $this->v_data);
  }

  public function simpanSopLitbang()
  {
    helper('upload');

    $file = $this->request->getFile('sop_litbang');

    if ($file) {
      $upload = upload_files($file, FCPATH . 'upload/publikasi');

      if ($upload) {
        $profil = $this->m_profil->getData()->sop_litbang;
        $file_location = 'upload/publikasi/' . $profil;
        if (realpath($file_location)) {
          unlink(FCPATH . $file_location); //hapus file yang akan diupdate
        }
        $this->m_profil->save(['id_profil' => 1, 'sop_litbang' => $upload['data']]);
        alert_success('Sukses Mengupload Gambar SOP Kelitbangan');
      } else {
        alert_failed('Gagal Mengupload Gambar SOP Kelitbangan');
      }
    } else {
      alert_failed('Gagal Mengupload Gambar SOP Kelitbangan');
    }
    return redirect()->to(base_url('bappeda/publikasi/sop'));
  }
}
