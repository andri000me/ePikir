<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\AgendaModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Agenda extends BaseController
{
  private $m_agenda;
  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->m_agenda = new AgendaModel();
  }

  public function index()
  {
    $this->v_data['active'] = '5.2';
    $this->v_data['agenda']     = $this->m_agenda->orderBy('id_agenda', 'DESC')->getData();

    return views('content/agenda/agenda', 'Bappeda', $this->v_data);
  }

  #CRUD PROSES
  public function addAgenda()
  {
    $this->v_data['active'] = '5.2';

    return views('content/agenda/form_agenda', 'Bappeda', $this->v_data);
  }

  public function editAgenda($id)
  {
    $this->v_data['active'] = '5.2';
    $this->v_data['agenda'] = $this->m_agenda->getData(decode($id));
    $this->v_data['myid']   = $id;

    return views('content/agenda/form_agenda', 'Bappeda', $this->v_data);
  }
  #END PROSES

  public function saveAgenda()
  {
    $post = $this->request->getPost();

    if ($post) {
      $waktu_agenda = explode(' - ', $post['waktu_agenda']);
      $waktu_awal = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $waktu_agenda[0])));
      $waktu_akhir = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $waktu_agenda[1])));
      $data = [
        'id_user'       => session('id_user'),
        'judul_agenda'  => $post['judul_agenda'],
        'isi_agenda'    => $post['isi_agenda'],
        'waktu_awal'    => $waktu_awal,
        'waktu_akhir'   => $waktu_akhir,
        'waktu_update'  => date("Y-m-d H:i:s"),
        'active'        => 1
      ];

      if ($post['id_agenda'] != '') {
        $data['id_agenda'] = decode($post['id_agenda']);
      }

      if ($this->m_agenda->save($data)) {
        alert_success('Berhasil simpan data agenda');
      } else {
        alert_failed('Gagal simpan data agenda');
      }
      return redirect()->to(base_url('bappeda/publikasi/agenda'));
    } else {
      // return redirect()->to(base_url('bappeda/publikasi/agenda'));
      throw PageNotFoundException::forPageNotFound();
    }
  }

  #delete logic
  public function deleteAgenda($id)
  {
    if ($id != null) {
      $id_agenda = decode($id);

      $delete_data = $this->m_agenda->delete(['id_agenda' => $id_agenda]);

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
