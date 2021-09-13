<?php

namespace App\Modules\Bappeda\Controllers;

use App\Models\MasterData;
use App\Modules\Bappeda\Models\BeritaModel;
use App\Modules\Bappeda\Models\KategoriBModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Berita extends BaseController
{
  private $m_berita;
  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->m_berita = new BeritaModel();
    $this->m_kategori = new KategoriBModel();
  }

  public function index()
  {
    helper('text');
    $this->v_data['active'] = '5.4';
    $this->v_data['berita'] = $this->m_berita->select('kb.nama_kategori')->join("tbl_kategori_berita kb", "tb.id_kb = kb.id_kb", 'LEFT')->orderBy('id_berita', 'DESC')->getData();

    return views('content/berita/list_berita', 'Bappeda', $this->v_data);
  }

  public function addBerita()
  {
    $this->v_data['active'] = '5.4';
    $this->v_data['kategori'] = $this->m_kategori->getData();

    return views('content/berita/form_berita', 'Bappeda', $this->v_data);
  }

  public function editBerita($id)
  {
    $this->v_data['active'] = '5.4';
    $this->v_data['kategori'] = $this->m_kategori->getData();
    $this->v_data['berita'] = $this->m_berita->getData(decode($id));
    $this->v_data['myid']   = $id;

    return views('content/berita/form_berita', 'Bappeda', $this->v_data);
  }

  public function changeActive($active = 0, $id = '')
  {
    if ($id != '') {
      if ($active > 1) {
        $active = 1;
      }

      $simpan = $this->m_berita->set(['active' => $active])->where(['id_berita' => decode($id)])->update();
      if ($simpan) {
        if ($active == 1) {
          $alert = 'Berita diaktifkan';
        } else {
          $alert = 'Berita dinon-aktifkan';
        }
        $res = ['respons' => true, 'alert' => $alert];
      } else {
        $res = ['respons' => false, 'alert' => 'Gagal ubah status berita'];
      }
    } else {
      $res = ['respons' => false, 'alert' => 'Ubah status berita gagal'];
    }
    echo json_encode($res);
  }

  public function saveBerita()
  {
    helper('upload');

    $post = $this->request->getPost();

    if ($post) {
      $data = [
        'id_user'       => session('id_user'),
        'id_kb'         => decode($post['kb']),
        'judul_berita'  => $post['judul_berita'],
        'isi_berita'    => $post['isi_berita'],
        // 'file_foto'     => $upload['data'],
        'waktu_update'  => date("Y-m-d H:i:s"),
        'active'        => 1
      ];

      $file = $this->request->getFile('file_foto');

      // Jika post id_berita maka update
      if ($post['id_berita'] != '') {
        // $data['id_berita'] = decode($post['id_berita']);
        $data_berita = $this->m_berita->getData(decode($post['id_berita']));

        $data['file_foto'] = $data_berita->file_foto;

        // Cek apakah post file kosong/tidak
        if ($file != '') {
          $upload = upload_files($file, FCPATH . 'upload/berita');

          if ($upload['respons']) {
            $data['file_foto'] = $upload['data'];

            $file_location = 'upload/berita/' . $data_berita->file_foto;
            if (realpath($file_location)) {
              unlink(FCPATH . $file_location); //hapus file yang akan diupdate
            }
          }
        }
        $save = $this->m_berita->set($data)->where(['id_berita' => decode($post['id_berita'])])->update();
      } else {
        $upload = upload_files($file, FCPATH . 'upload/berita');

        if ($upload['respons']) {
          $data['file_foto'] = $upload['data'];
        }
        $masterdata = new MasterData();
        $save = $masterdata->inputData($data, 'tbl_berita');
      }

      if ($save) {
        alert_success('Berhasil simpan data');
      } else {
        alert_failed('Gagal simpan data');
      }

      return redirect()->to(base_url('bappeda/publikasi/berita'));
    } else {
      // alert_failed('Gagal simpan data');
      // return redirect()->to(base_url('bappeda/publikasi/berita'));
      throw PageNotFoundException::forPageNotFound();
    }
  }

  public function deleteBerita($id)
  {
    if ($id != null) {
      $id_berita = decode($id);

      $data_berita = $this->m_berita->getData($id_berita);
      $file_location = 'upload/berita/' . $data_berita->file_foto;
      if (realpath($file_location)) {
        unlink(FCPATH . $file_location); //hapus file
      }

      $masterdata = new MasterData();
      $delete_data = $masterdata->deleteData(['id_berita' => $id_berita], 'tbl_berita');

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
