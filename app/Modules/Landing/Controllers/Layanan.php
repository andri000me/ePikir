<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\IzinPenelitianModel;
use App\Modules\Landing\Models\RekomendasiPenelitianModel;
use App\Modules\Landing\Models\UserPemohonModel;
use CodeIgniter\Database\BaseBuilder;

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
        $getTab = $this->request->getGet('tab');

        if ($getTab != null) {
            if ($getTab == 1 || $getTab == 2) {
                $tab = $getTab;
            } else {
                $tab = 1;
            }
        } else {
            $tab = 1;
        }

        $this->v_data['tab']     = $tab;
        $this->v_data['active']  = '6.1';

        return views('content/layanan/izin_penelitian', 'Landing', $this->v_data);
    }

    public function saveRekomendasiPenelitian()
    {
        helper('upload');
        $m_user = new UserPemohonModel();
        $m_rpl = new RekomendasiPenelitianModel();
        $post = $this->request->getPost();
        $cek_token = $this->session->getTempdata('cektoken');
        if ($cek_token) {
            if ($post) {
                $file = $this->request->getFile('file_lampiran');
                $upload = upload_files($file, FCPATH . 'upload/permohonan/rpl');

                if ($upload['respons']) {
                    $data_user = array(
                        'nama_pemohon'      => $post['nama_pemohon'],
                        'pekerjaan_pemohon' => $post['pekerjaan_pemohon'],
                        'alamat_pemohon'    => $post['alamat_pemohon'],
                        'no_telp_pemohon'   => $post['no_telp_pemohon'],
                        'email_pemohon'     => $post['email_pemohon'],
                    );
                    $save_user = $m_user->save($data_user);

                    $id_user = $this->db->insertID();

                    $no_surat = $this->noSurat('kesbangpol');

                    $data_rpl = array(
                        'no_rpl'                => '070/' . $no_surat . '/47' . '/' . date('Y'),
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
                        $res = ['success' => true, 'url' => base_url('landing/izinpenelitian')];
                    } else {
                        $res = ['success' => false, 'alert' => 'Data gagal disimpan.', 'url' => base_url('landing/izinpenelitian')];
                    }
                } else {
                    $res = ['success' => false, 'alert' => $upload['data'], 'url' => base_url('landing/izinpenelitian')];
                }

                echo json_encode($res);
            } else {
                return redirect()->to(base_url('landing/izinpenelitian'));
            }
        } else {
            return redirect()->to(base_url('landing/izinpenelitian'));
        }
    }

    public function saveIzinPenelitian()
    {
        helper('upload');
        $m_ipl = new IzinPenelitianModel();
        $m_rpl = new RekomendasiPenelitianModel();
        $post = $this->request->getPost();
        $cek_token = $this->session->getTempdata('cektoken');
        if ($cek_token) {
            if ($post) {
                $where = array(
                    'no_rpl'    => $post['no_rpl'],
                    'status'    => 3,
                );
                $data_rpl = $m_rpl->where($where);
                if ($data_rpl->countAllResults(false) > 0) { //cek apakah no surat terdaftar & sudah disetujui

                    $no_surat = $this->noSurat('dpmptsp');
                    $id_rpl = $data_rpl->get()->getRow()->id_rpl;

                    $ipl = $m_ipl->where('id_rpl', $id_rpl);
                    if ($ipl->countAllResults(false) == 0) { //cek apakah sudah pernah upload
                        $file = $this->request->getFile('file_lampiran');
                        $upload = upload_files($file, FCPATH . 'upload/permohonan/ipl');
                        if ($upload['respons']) {
                            $data_ipl = array(
                                'no_ipl'                => '070/' . $no_surat . '/16' . '/' . date('Y'),
                                'id_rpl'                => $id_rpl,
                                'file_lampiran'         => $upload['data'],
                                'waktu_pengajuan'       => date('Y-m-d H:i:s'),
                                // 'waktu_verifikasi'      => null,
                                'status'                => 1,
                            );

                            $save_ipl = $m_ipl->save($data_ipl); //insert data baru

                            if ($save_ipl) {
                                $res = ['success' => true, 'url' => base_url('landing/izinpenelitian?tab=2')];
                            } else {
                                $res = ['success' => false, 'alert' => 'Data gagal disimpan.', 'url' => base_url('landing/izinpenelitian?tab=2')];
                            }
                        } else {
                            $res = ['success' => false, 'alert' => $upload['data'], 'url' => base_url('landing/izinpenelitian?tab=2')];
                        }
                    } else {
                        $row_ipl = $ipl->get()->getRow();

                        if ($row_ipl->status == 1) { //cek apakah status masih 1 (belum diproses)
                            $file = $this->request->getFile('file_lampiran');
                            $upload = upload_files($file, FCPATH . 'upload/permohonan/ipl');
                            if ($upload['respons']) {
                                $file_location = 'upload/permohonan/ipl/' . $row_ipl->file_lampiran;
                                if (file_exists(realpath($file_location))) {
                                    unlink(FCPATH . $file_location); //hapus file yang akan diupdate
                                }

                                $data_ipl = array(
                                    'id_ipl'                => $row_ipl->id_ipl,
                                    'file_lampiran'         => $upload['data'],
                                    'waktu_pengajuan'       => date('Y-m-d H:i:s'),
                                );

                                $save_ipl = $m_ipl->save($data_ipl); //update data

                                if ($save_ipl) {
                                    $res = ['success' => true, 'url' => base_url('landing/izinpenelitian?tab=2')];
                                } else {
                                    $res = ['success' => false, 'alert' => 'Data gagal disimpan.', 'url' => base_url('landing/izinpenelitian?tab=2')];
                                }
                            } else {
                                $res = ['success' => false, 'alert' => $upload['data'], 'url' => base_url('landing/izinpenelitian?tab=2')];
                            }
                        } else {
                            $res = ['success' => false, 'alert' => 'Pengajuan Anda sudah diproses.', 'url' => base_url('landing/izinpenelitian?tab=2')];
                        }
                    }
                } else {
                    $res = ['success' => false, 'alert' => 'Permohonan Anda belum disetujui.', 'url' => base_url('landing/izinpenelitian?tab=2')];
                }

                echo json_encode($res);
            } else {
                return redirect()->to(base_url('landing/izinpenelitian?tab=2'));
            }
        } else {
            return redirect()->to(base_url('landing/izinpenelitian?tab=2'));
        }
    }

    public function noSurat($kolom = '')
    {
        $no_surat = $this->db->table('tbl_no_surat')->where("tahun", date('Y'));
        if ($no_surat->countAllResults(false) == 0) {
            $no_last = '001';
            $data = array(
                'kesbangpol'    => $no_last,
                'bappeda'       => $no_last,
                'dpmptsp'       => $no_last,
                'tahun'         => date('Y'),
            );
            $this->db->table('tbl_no_surat')->insert($data);
        } else {
            $no_last = $no_surat->get()->getRow()->$kolom;
            $nos = (int) $no_last;
            $no_new = sprintf("%03s", $nos + 1);

            $this->db->table('tbl_no_surat')->set($kolom, $no_new)->where("tahun", date('Y'))->update();
        }
        return $no_last;
    }

    public function selectNoHp()
    {
        $jenis = $this->request->getVar('jenis');
        if ($jenis == 'rpl') {
            $no_hp = $this->request->getVar('nomor');
        } else {
            $m_user = new UserPemohonModel();
            $data_user = $m_user->whereIn('id_user_pemohon', function (BaseBuilder $builder) {
                $no_rpl = $this->request->getVar('nomor');
                return $builder->select('id_user_pemohon')->from('tbl_rekomendasi_penelitian')->where('no_rpl', $no_rpl);
            });
            if ($data_user->countAllResults(false) > 0) {
                $no_hp = $data_user->get()->getRow()->no_telp_pemohon;
            } else {
                $no_hp = null;
            }
        }

        if ($no_hp != null) {
            $get_token = $this->getToken($no_hp);
            echo $get_token;
        } else {
            $res = ['success' => false, 'alert' => 'Nomor Surat Rekomendasi tidak terdaftar!'];
            echo json_encode($res);
        }
    }

    public function getToken($no_hp = '')
    {
        helper('wa');

        $this->session->setTempdata('cektoken', false, 300); //simpan session cektoken 300 second

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

        return json_encode($datas);
    }

    public function checkToken()
    {
        $token = $this->request->getVar('token');
        if ($this->session->getTempdata('tokensxxx') != '' && $this->session->getTempdata('tokensxxx') == $token) {
            $this->session->setTempdata('cektoken', true, 30);

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
