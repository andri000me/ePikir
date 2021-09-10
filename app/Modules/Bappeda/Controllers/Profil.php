<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\ProfilModel;

class Profil extends BaseController
{
  private $m_profil;
  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->m_profil = new ProfilModel();
  }

  // Tentang Kami =======================================
  public function about()
  {
    $profil = '';
    if ($this->m_profil->getData() != null) {
      $profil = $this->m_profil->getData()->isi_profil;
    }
    $this->v_data['active'] = '4.1';
    $this->v_data['content'] = $profil;

    return views('content/profil/about', 'Bappeda', $this->v_data);
  }

  public function simpanAbout()
  {
    $isi_profil = $this->request->getVar('isi_profil');

    #mengupdate data pada model profil
    if ($this->m_profil->save(['id_profil' => 1, 'isi_profil' => $isi_profil])) {
      alert_success('Berhasil simpan data profil');
    } else {
      alert_failed('Gagal simpan data profil');
    }

    return redirect()->to(base_url('bappeda/profil/about'));
  }
  // ======================================================

  // Tugas Pokok ==========================================
  public function tugasPokok()
  {
    $profil = '';
    if ($this->m_profil->getData() != null) {
      $profil = $this->m_profil->getData()->tugas_pokok;
    }
    $this->v_data['active'] = '4.2';
    $this->v_data['content'] = $profil;

    return views('content/profil/tugaspokok', 'Bappeda', $this->v_data);
  }

  public function simpanTugasPokok()
  {
    $tugas_pokok = $this->request->getVar('tugas_pokok');

    #mengupdate data pada model profil
    if ($this->m_profil->save(['id_profil' => 1, 'tugas_pokok' => $tugas_pokok])) {
      alert_success('Sukses Mengupdate Tugas Pokok');
    } else {
      alert_failed('Gagal Mengupdate Tugas Pokok');
    }

    return redirect()->to(base_url('bappeda/profil/tugaspokok'));
  }
  // ======================================================

  // Struktur Organisasi ==================================
  public function strukturOrganisasi()
  {
    $profil = '';
    if ($this->m_profil->getData() != null) {
      $profil = $this->m_profil->getData()->struktur_organisasi;
    }
    $this->v_data['active'] = '4.3';
    $this->v_data['image'] = $profil;

    return views('content/profil/struktur', 'Bappeda', $this->v_data);
  }

  public function simpanStrukturOrganisasi()
  {
    helper('upload');

    $file = $this->request->getFile('file_struktur');

    if ($file) {
      $upload = upload_files($file, FCPATH . 'upload/profil');

      if ($upload) {
        $profil = $this->m_profil->getData()->struktur_organisasi;
        $file_location = 'upload/profil/' . $profil;
        if (realpath($file_location)) {
          unlink(FCPATH . $file_location); //hapus file yang akan diupdate
        }
        $this->m_profil->save(['id_profil' => 1, 'struktur_organisasi' => $upload['data']]);
        alert_success('Sukses Mengupload Gambar Struktur Organisasi');
      } else {
        alert_failed('Gagal Mengupload Gambar Struktur Organisasi');
      }
    } else {
      alert_failed('Gagal Mengupload Gambar Struktur Organisasi');
    }
    return redirect()->to(base_url('bappeda/profil/organisasi'));
  }
  // =======================================================
}
