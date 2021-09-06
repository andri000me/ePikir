<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\IzinPenelitianModel;
use App\Modules\Landing\Models\IzinPengabdianModel;
use App\Modules\Landing\Models\KlinikPenelitianModel;
use App\Modules\Landing\Models\RekomendasiPenelitianModel;
use App\Modules\Landing\Models\RekomendasiPengabdianModel;
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

    // PENELITIAN ==========================================
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

                    $no_surat = $this->noSurat('kesbangpol', 'penelitian'); //ambil no surat jenis penelitian kolom kesbangpol

                    $data_rpl = array(
                        'no_rpl'                => '070/' . $no_surat . '/47' . '/' . date('Y'),
                        'id_user_pemohon'       => $id_user,
                        'lokasi'                => $post['lokasi'],
                        'tujuan'                => $post['tujuan'],
                        'penanggung_jawab'      => $post['penanggung_jawab'],
                        'nama_instansi'         => $post['nama_instansi'],
                        'no_surat_permohonan'   => $post['no_surat_permohonan'],
                        'tgl_surat_permohonan'  => date('Y-m-d', strtotime(str_replace('/', '-', $post['tgl_surat_permohonan']))),
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

                    $no_surat = $this->noSurat('dpmptsp', 'penelitian'); //ambil no surat jenis penelitian kolom dpmptsp
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
                                if (realpath($file_location)) {
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

    // END PENELITIAN ======================================

    // PENGABDIAN ==========================================
    public function izinPengabdian()
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
        $this->v_data['active']  = '6.2';

        return views('content/layanan/izin_pengabdian', 'Landing', $this->v_data);
    }

    public function saveRekomendasiPengabdian()
    {
        helper('upload');
        $m_user = new UserPemohonModel();
        $m_rpb = new RekomendasiPengabdianModel();
        $post = $this->request->getPost();
        $cek_token = $this->session->getTempdata('cektoken');
        if ($cek_token) {
            if ($post) {
                $file = $this->request->getFile('file_lampiran');
                $upload = upload_files($file, FCPATH . 'upload/permohonan/rpb');

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

                    $no_surat = $this->noSurat('kesbangpol', 'pengabdian'); //ambil no surat jenis pengabdian kolom kesbangpol

                    $data_rpb = array(
                        'no_rpb'                => '432.4/' . $no_surat . '/47' . '/' . date('Y'),
                        'id_user_pemohon'       => $id_user,
                        'lokasi'                => $post['lokasi'],
                        'tujuan'                => $post['tujuan'],
                        'penanggung_jawab'      => $post['penanggung_jawab'],
                        'nama_instansi'         => $post['nama_instansi'],
                        'no_surat_permohonan'   => $post['no_surat_permohonan'],
                        'tgl_surat_permohonan'  => date('Y-m-d', strtotime(str_replace('/', '-', $post['tgl_surat_permohonan']))),
                        'file_lampiran'         => $upload['data'],
                        'tgl_pelaksanaan_mulai' => date('Y-m-d', strtotime(str_replace('/', '-', $post['tgl_pelaksanaan_mulai']))),
                        'tgl_pelaksanaan_akhir' => date('Y-m-d', strtotime(str_replace('/', '-', $post['tgl_pelaksanaan_akhir']))),
                        'waktu_pengajuan'       => date('Y-m-d H:i:s'),
                        // 'waktu_verifikasi'      => null,
                        'status'                => 1,
                    );
                    $save_rpb = $m_rpb->save($data_rpb);

                    if ($save_rpb) {
                        $res = ['success' => true, 'url' => base_url('landing/izinpengabdian')];
                    } else {
                        $res = ['success' => false, 'alert' => 'Data gagal disimpan.', 'url' => base_url('landing/izinpengabdian')];
                    }
                } else {
                    $res = ['success' => false, 'alert' => $upload['data'], 'url' => base_url('landing/izinpengabdian')];
                }

                echo json_encode($res);
            } else {
                return redirect()->to(base_url('landing/izinpengabdian'));
            }
        } else {
            return redirect()->to(base_url('landing/izinpengabdian'));
        }
    }

    public function saveIzinPengabdian()
    {
        helper('upload');
        $m_ipb = new IzinPengabdianModel();
        $m_rpb = new RekomendasiPengabdianModel();
        $post = $this->request->getPost();
        $cek_token = $this->session->getTempdata('cektoken');
        if ($cek_token) {
            if ($post) {
                $where = array(
                    'no_rpb'    => $post['no_rpb'],
                    'status'    => 3,
                );
                $data_rpb = $m_rpb->where($where);
                if ($data_rpb->countAllResults(false) > 0) { //cek apakah no surat terdaftar & sudah disetujui

                    $no_surat = $this->noSurat('dpmptsp', 'pengabdian'); //ambil no surat jenis pengabdian kolom dpmptsp
                    $id_rpb = $data_rpb->get()->getRow()->id_rpb;

                    $ipb = $m_ipb->where('id_rpb', $id_rpb);
                    if ($ipb->countAllResults(false) == 0) { //cek apakah sudah pernah upload
                        $file = $this->request->getFile('file_lampiran');
                        $upload = upload_files($file, FCPATH . 'upload/permohonan/ipb');
                        if ($upload['respons']) {
                            $data_ipb = array(
                                'no_ipb'                => '432.4/' . $no_surat . '/16' . '/' . date('Y'),
                                'id_rpb'                => $id_rpb,
                                'file_lampiran'         => $upload['data'],
                                'waktu_pengajuan'       => date('Y-m-d H:i:s'),
                                // 'waktu_verifikasi'      => null,
                                'status'                => 1,
                            );

                            $save_ipb = $m_ipb->save($data_ipb); //insert data baru

                            if ($save_ipb) {
                                $res = ['success' => true, 'url' => base_url('landing/izinpengabdian?tab=2')];
                            } else {
                                $res = ['success' => false, 'alert' => 'Data gagal disimpan.', 'url' => base_url('landing/izinpengabdian?tab=2')];
                            }
                        } else {
                            $res = ['success' => false, 'alert' => $upload['data'], 'url' => base_url('landing/izinpengabdian?tab=2')];
                        }
                    } else {
                        $row_ipb = $ipb->get()->getRow();

                        if ($row_ipb->status == 1) { //cek apakah status masih 1 (belum diproses)
                            $file = $this->request->getFile('file_lampiran');
                            $upload = upload_files($file, FCPATH . 'upload/permohonan/ipb');
                            if ($upload['respons']) {
                                $file_location = 'upload/permohonan/ipb/' . $row_ipb->file_lampiran;
                                if (realpath($file_location)) {
                                    unlink(FCPATH . $file_location); //hapus file yang akan diupdate
                                }

                                $data_ipb = array(
                                    'id_ipb'                => $row_ipb->id_ipb,
                                    'file_lampiran'         => $upload['data'],
                                    'waktu_pengajuan'       => date('Y-m-d H:i:s'),
                                );

                                $save_ipb = $m_ipb->save($data_ipb); //update data

                                if ($save_ipb) {
                                    $res = ['success' => true, 'url' => base_url('landing/izinpengabdian?tab=2')];
                                } else {
                                    $res = ['success' => false, 'alert' => 'Data gagal disimpan.', 'url' => base_url('landing/izinpengabdian?tab=2')];
                                }
                            } else {
                                $res = ['success' => false, 'alert' => $upload['data'], 'url' => base_url('landing/izinpengabdian?tab=2')];
                            }
                        } else {
                            $res = ['success' => false, 'alert' => 'Pengajuan Anda sudah diproses.', 'url' => base_url('landing/izinpengabdian?tab=2')];
                        }
                    }
                } else {
                    $res = ['success' => false, 'alert' => 'Permohonan Anda belum disetujui.', 'url' => base_url('landing/izinpengabdian?tab=2')];
                }

                echo json_encode($res);
            } else {
                return redirect()->to(base_url('landing/izinpengabdian?tab=2'));
            }
        } else {
            return redirect()->to(base_url('landing/izinpengabdian?tab=2'));
        }
    }

    // END PENGABDIAN ======================================

    // PENGABDIAN ==========================================
    public function klinikPenelitian()
    {

        $this->v_data['active']  = '6.3';

        return views('content/layanan/klinik_penelitian', 'Landing', $this->v_data);
    }

    public function saveKlinikPenelitian()
    {
        helper('upload');
        $m_ipl = new IzinPenelitianModel();
        $m_kpl = new KlinikPenelitianModel();
        $post = $this->request->getPost();
        $cek_token = $this->session->getTempdata('cektoken');
        if ($cek_token) {
            if ($post) {
                $data_ipl = $m_ipl->select('id_ipl')->where(['no_ipl' => $post['no_ipl'], 'status' => 3]);

                if ($data_ipl->countAllResults(false) > 0) {
                    $id_ipl = $data_ipl->get()->getRow()->id_ipl;

                    $dt_kpl = $m_kpl->where(['id_ipl' => $id_ipl]);

                    $data_kpl = array(
                        'id_ipl'                => $id_ipl,
                        'jenis_permohonan'      => $post['jenis_permohonan'],
                        'keterangan'            => $post['keterangan'],
                        'waktu_pengajuan'       => date('Y-m-d H:i:s'),
                        // 'waktu_verifikasi'      => null,
                        'status'                => 1,
                    );

                    if ($dt_kpl->countAllResults(false) > 0) {
                        $row_kpl = $dt_kpl->get()->getRow();
                        if ($row_kpl->status == 1) {
                            $data_kpl['id_kpl'] = $row_kpl->id_kpl;
                        } else {
                            $res = ['success' => false, 'alert' => 'Pengajuan sudah diproses.', 'url' => base_url('landing/klinik')];
                            echo json_encode($res);
                            exit();
                        }
                    }

                    $save_kpl = $m_kpl->save($data_kpl);

                    if ($save_kpl) {
                        $res = ['success' => true, 'url' => base_url('landing/klinik')];
                    } else {
                        $res = ['success' => false, 'alert' => 'Data gagal disimpan.', 'url' => base_url('landing/klinik')];
                    }
                } else {
                    $res = ['success' => false, 'alert' => 'Nomor Izin Perizinan tidak valid atau belum disetujui.', 'url' => base_url('landing/klinik')];
                }

                echo json_encode($res);
            } else {
                return redirect()->to(base_url('landing/klinik'));
            }
        } else {
            return redirect()->to(base_url('landing/klinik'));
        }
    }

    // =====================================================

    public function noSurat($kolom = '', $jenis = 'penelitian')
    {
        $where = array(
            'tahun' => date('Y'),
            'jenis' => $jenis,
        );
        $no_surat = $this->db->table('tbl_no_surat')->where($where);
        if ($no_surat->countAllResults(false) == 0) {
            $no_last = '001';
            $data = array(
                'kesbangpol'    => $no_last,
                'bappeda'       => $no_last,
                'dpmptsp'       => $no_last,
                'jenis'         => $jenis,
                'tahun'         => date('Y'),
            );
            $this->db->table('tbl_no_surat')->insert($data);
        } else {
            $no_last = $no_surat->get()->getRow()->$kolom;
            $nos = (int) $no_last;
            $no_new = sprintf("%03s", $nos + 1);

            $this->db->table('tbl_no_surat')->set($kolom, $no_new)->where($where)->update();
        }
        return $no_last;
    }

    public function selectNoHp()
    {
        $jenis = $this->request->getVar('jenis');
        if ($jenis == 'rpl' || $jenis == 'rpb') {
            $no_hp = $this->request->getVar('nomor');
        } else {
            $m_user = new UserPemohonModel();
            $nomor = $this->request->getVar('nomor');
            $data_user = $m_user->whereIn('id_user_pemohon', function (BaseBuilder $builder) use ($jenis, $nomor) {
                if ($jenis != 'kpl') {
                    if ($jenis == 'ipl') {
                        $tbl = 'tbl_rekomendasi_penelitian';
                        $kolom = 'no_rpl';
                    } else {
                        $tbl = 'tbl_rekomendasi_pengabdian';
                        $kolom = 'no_rpb';
                    }

                    return $builder->select('id_user_pemohon')->from($tbl)->where($kolom, $nomor);
                } else {
                    return $builder->select('id_user_pemohon')->from('tbl_rekomendasi_penelitian')->whereIn('id_rpl', function (BaseBuilder $builder) use ($nomor) {
                        return $builder->select('id_rpl')->from('tbl_izin_penelitian')->where('no_ipl', $nomor);
                    });
                }
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
