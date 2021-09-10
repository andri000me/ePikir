<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\GaleriModel;
use App\Modules\Bappeda\Models\KategoriGModel;

class Galeri extends BaseController
{
  private $m_galeri;
  private $m_kategori;
  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->m_galeri = new GaleriModel();
    $this->m_kategori = new KategoriGModel();
  }

  public function index()
  {
    helper('text');
    $this->v_data['active'] = '5.5';
    $this->v_data['galeri'] = $this->m_galeri->select('nama_kategori')->join("tbl_kategori_galeri b", "tbl_galeri.id_kg = b.id_kg", 'LEFT')->orderBy('id_galeri', 'DESC')->getData();

    return views('content/galeri/list_galeri', 'Bappeda', $this->v_data);
  }

  public function addGaleri()
  {
    $this->v_data['active'] = '5.5';
    $this->v_data['kategori'] = $this->m_kategori->getData();

    return views('content/galeri/form_galeri', 'Bappeda', $this->v_data);
  }

  public function editGaleri($id)
  {
    $this->v_data['active']   = '5.5';
    $this->v_data['galeri'] = $this->m_galeri->getData(decode($id));
    $this->v_data['kategori'] = $this->m_kategori->getData();

    return views('content/galeri/form_galeri', 'Bappeda', $this->v_data);
  }

  public function saveGaleri()
  {
    helper('upload');

    $post = $this->request->getPost();

    if ($post) {
      $data = [
        'id_user' => session('id_user'),
        'id_kg' => decode($post['kg']),
        'judul_galeri' => $post['judul_galeri'],
        'ket_galeri' => $post['ket_galeri'],
        'waktu_kegiatan' => date('Y-m-d', strtotime($post['waktu_kegiatan'])),
        // 'file_foto' => $post['file_foto'],
        // 'link_video' => $post['link_video'],
        'jenis_galeri' => $post['jenis_galeri'],
        'waktu_update'  => date("Y-m-d H:i:s"),
        'active'        => 1
      ];

      if ($post['jenis_galeri'] == 2 && isset($post['link_video'])) {
        $data['link_video'] = $post['link_video'];
      }

      $file = $this->request->getFile('file_foto');

      // Jika post id_galeri maka update
      if ($post['id_galeri'] != '') {
        $data['id_galeri'] = decode($post['id_galeri']);
        $data_galeri = $this->m_galeri->getData($data['id_galeri']);

        $data['file_foto'] = $data_galeri->file_foto;

        // Cek apakah post file kosong/tidak
        if ($file != '') {
          $upload = upload_files($file, FCPATH . 'upload/galeri');

          if ($upload['respons']) {
            $data['file_foto'] = $upload['data'];

            if ($data_galeri->file_foto != null && $data_galeri->file_foto != '') {
              $file_location = 'upload/galeri/' . $data_galeri->file_foto;
              if (realpath($file_location)) {
                unlink(FCPATH . $file_location); //hapus file yang akan diupdate
              }
            }
          }
        } else {
          if ($post['jenis_galeri'] == 2 && isset($post['link_video'])) {
            $data['file_foto'] = null;
            if ($data_galeri->file_foto != null && $data_galeri->file_foto != '') {
              $file_location = 'upload/galeri/' . $data_galeri->file_foto;
              if (realpath($file_location)) {
                unlink(FCPATH . $file_location); //hapus file yang akan diupdate
              }
            }
          }
        }
      } else {
        $upload = upload_files($file, FCPATH . 'upload/galeri');

        if ($upload['respons']) {
          $data['file_foto'] = $upload['data'];
        }
      }

      if ($this->m_galeri->save($data)) {
        alert_success('Berhasil simpan data');
      } else {
        alert_failed('Gagal simpan data');
      }

      return redirect()->to(base_url('bappeda/publikasi/galeri'));
    } else {
      alert_failed('Gagal simpan data');
      return redirect()->to(base_url('bappeda/publikasi/galeri'));
    }
  }

  public function deleteGaleri($id)
  {
    if ($id != null) {
      $id_galeri = decode($id);

      $data_galeri = $this->m_galeri->getData($id_galeri);
      if ($data_galeri->file_foto != null && $data_galeri->file_foto != '') {
        $file_location = 'upload/galeri/' . $data_galeri->file_foto;
        if (realpath($file_location)) {
          unlink(FCPATH . $file_location); //hapus file yang akan diupdate
        }
      }

      $delete_data = $this->m_galeri->delete(['id_galeri' => $id_galeri]);

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

      $simpan = $this->m_galeri->set(['active' => $active])->where(['id_galeri' => decode($id)])->update();
      if ($simpan) {
        if ($active == 1) {
          $alert = 'Galeri diaktifkan';
        } else {
          $alert = 'Galeri dinon-aktifkan';
        }
        $res = ['respons' => true, 'alert' => $alert];
      } else {
        $res = ['respons' => false, 'alert' => 'Gagal ubah status galeri'];
      }
    } else {
      $res = ['respons' => false, 'alert' => 'Ubah status galeri gagal'];
    }
    echo json_encode($res);
  }
}
