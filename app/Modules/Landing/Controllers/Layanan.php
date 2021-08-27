<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\RekomendasiPenelitianModel;
use App\Modules\Landing\Models\UserPemohonModel;

class Layanan extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function izinPenelitian()
    {

        $this->v_data['active']     = '6.1';

        return views('content/layanan/izin_penelitian', 'Landing', $this->v_data);
    }

    public function saveRekomendasiPenelitian()
    {
        helper('upload');
        $m_user = new UserPemohonModel();
        $m_rpl = new RekomendasiPenelitianModel();
        $post = $this->request->getPost();

        if ($post) {
            $file = $this->request->getFile('file_lampiran');
            $upload = upload_files($file, FCPATH . 'upload/permohonan/rpl');

            if ($upload) {
                $data_user = array(
                    'nama_pemohon'      => $post['nama_pemohon'],
                    'pekerjaan_pemohon' => $post['pekerjaan_pemohon'],
                    'alamat_pemohon'    => $post['alamat_pemohon'],
                    'no_telp_pemohon'   => $post['no_telp_pemohon'],
                    'email_pemohon'     => $post['email_pemohon'],
                );
                $save_user = $m_user->save($data_user);

                $id_user = $this->db->insertID();

                $no_surat = $this->db->table('tbl_no_surat')->where("tahun", date('Y'));
                if ($no_surat->countAllResults() == 0) {
                    $no_last = '001';
                    $data = array(
                        'kesbangpol'    => $no_last,
                        'bappeda'       => $no_last,
                        'dpmptsp'       => $no_last,
                        'tahun'         => date('Y'),
                    );
                    $this->db->table('tbl_no_surat')->insert($data);
                } else {
                    $no_last = $no_surat->get()->getRow()->kesbangpol;
                    $nos = (int) $no_last;
                    $no_new = sprintf("%03s", $nos + 1);

                    $this->db->table('tbl_no_surat')->set('kesbangpol', $no_new)->where("tahun", date('Y'))->update();
                }

                $data_rpl = array(
                    'no_rpl'                => '070/' . $no_last . '/47' . '/' . date('Y'),
                    'id_user_pemohon'       => $id_user,
                    'penanggung_jawab'      => $post['penanggung_jawab'],
                    'lokasi'                => $post['lokasi'],
                    'tujuan'                => $post['tujuan'],
                    'file_lampiran'         => $upload['data'],
                    'tgl_pelaksanaan_mulai' => date('Y-m-d', strtotime(str_replace('/', '-', $post['tgl_pelaksanaan_mulai']))),
                    'tgl_pelaksanaan_akhir' => date('Y-m-d', strtotime(str_replace('/', '-', $post['tgl_pelaksanaan_akhir']))),
                    'waktu_pengajuan'       => date('Y-m-d H:i:s'),
                    // 'waktu_verifikasi'      => null,
                    'status'                => 1,
                );
                $save_rpl = $m_rpl->save($data_rpl);

                if ($save_rpl) {
                    $res = ['success' => true];
                } else {
                    $res = ['success' => false, 'alert' => 'Data gagal disimpan.'];
                }
            } else {
                $res = ['success' => false, 'alert' => $upload['data']];
            }

            echo json_encode($res);
        } else {
            return redirect()->to(base_url('landing/izinpenelitian'));
        }
    }

    public function getToken()
    {
        helper('wa');

        $no_hp = $this->request->getVar('no_hp');

        $this->session->setTempdata('cektoken', 'false', 300); //simpan session cektoken 300 second

        $cek_no_hp = check_wa($no_hp);

        if ($cek_no_hp) {
            $token = $this->generateRandomString();

            $pesan = "Kode token anda adalah : *" . $token . "*\nKode ini bersifat rahasia. Jangan berikan kode token kepada siapapun.\n\nDikirim dari *epikir.magelangkab.go.id*";

            $send_msg = send_wa($no_hp, $pesan);

            if ($send_msg) {
                $datas = ['success' => true];
            } else {
                $datas = ['success' => false, 'alert' => 'Token gagal dikirim'];
            }
        } else {
            $datas = ['success' => false, 'alert' => 'Nomor HP Anda tidak terdaftar WhatsApp'];
        }

        echo json_encode($datas);
    }

    public function checkToken()
    {
        $token = $this->request->getVar('token');
        if ($this->session->getTempdata('tokensxxx') != '' && $this->session->getTempdata('tokensxxx') == $token) {
            $this->session->setTempdata('cektoken', 'true', 300);

            $res = ['success' => true];
        } else {
            $res = ['success' => false, 'alert' => 'Token tidak cocok.'];
        }

        echo json_encode($res);
    }

    function generateRandomString($length = 6, $time = 90)
    {
        $characters = '0123456789';

        $charactersLength = strlen($characters);

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $this->session->setTempdata('tokensxxx', $randomString, ($time + 10));
        return $randomString;
    }
}
