<?php

namespace App\Modules\Kesbangpol\Controllers;

use App\Modules\Kesbangpol\Models\CetakSuratModel;
use App\Modules\Kesbangpol\Models\PetugasModel;
use App\Modules\Kesbangpol\Models\UserPemohonModel;

class Penelitian extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function rplMasuk()
    {
        $this->v_data['status']     = '1';
        $this->v_data['active']     = '2.1';

        return views('content/penelitian/rpl_masuk', 'Kesbangpol', $this->v_data);
    }

    public function rplProses()
    {
        $this->v_data['status']     = '2';
        $this->v_data['active']     = '2.2';

        return views('content/penelitian/rpl_proses', 'Kesbangpol', $this->v_data);
    }

    public function rplSelesai()
    {
        $get_status = $this->request->getGet('status');
        $status = 3;
        if ($get_status != null) {
            if ($get_status == 4 || $get_status == 5) {
                $status = $get_status;
            }
        }

        $info_status = 'Disetujui';
        if ($status == 4) {
            $info_status = 'Ditolak';
        }
        if ($status == 5) {
            $info_status = 'Semua';
        }
        $m_petugas = new PetugasModel();

        $this->v_data['status']         = $status;
        $this->v_data['info_status']    = $info_status;
        $this->v_data['petugas']        = $m_petugas->getData();
        $this->v_data['active']         = '2.3';

        return views('content/penelitian/rpl_selesai', 'Kesbangpol', $this->v_data);
    }

    // =====================================================

    public function prosesRpl($id = null)
    {
        if ($id != null) {
            echo $this->ubahStatusRpl($id, 2);
        }
    }

    public function setujuRpl($id = null)
    {
        if ($id != null) {
            echo $this->ubahStatusRpl($id, 3);
        }
    }

    public function tolakRpl($id = null)
    {
        $post = $this->request->getPost();
        if ($post) {
            echo $this->ubahStatusRpl($id, 4, $post['message']);
        }
    }

    // =====================================================

    public function getDataRpl($status = 1, $table = '')
    {
        $post = $this->request->getPost();
        if ($post) {
            $fetch_data = $this->m_rpl->makeDataTable($status);

            $data = array();
            $i = $post['start'];
            foreach ($fetch_data as $row) {
                $btn = '';
                $i++;

                $btn_hapus = '<button type="button" onclick="hapusData(this)" 
                data-link="' . base_url('kesbangpol/penelitian/hapusdata/' . encode($row->id_user_pemohon)) . '" 
                data-table="' . $table . '" 
                class="btn btn-sm btn-danger"  title="Hapus"><i class="la la-trash-o font-small-3"></i></button> ';

                $btn_detail = '<button type="button" onclick="showDetailModal(this)"
                data-id="' . encode($row->id_user_pemohon) . '" 
                data-nama="' . text_uc($row->nama_pemohon) . '" 
                data-pekerjaan="' . text_uc($row->pekerjaan_pemohon) . '" 
                data-alamat="' . $row->alamat_pemohon . '" 
                data-hp="' . $row->no_telp_pemohon . '" 
                data-email="' . $row->email_pemohon . '" 
                data-norpl="' . $row->no_rpl . '" 
                data-penanggung="' . text_uc($row->penanggung_jawab) . '" 
                data-instansi="' . text_uc($row->nama_instansi) . '" 
                data-lokasi="' . $row->lokasi . '" 
                data-tujuan="' . text_uc($row->tujuan) . '" 
                data-file="' . $row->file_lampiran . '" 
                data-mulai="' . formatTanggalTtd($row->tgl_pelaksanaan_mulai) . '" 
                data-akhir="' . formatTanggalTtd($row->tgl_pelaksanaan_akhir) . '" 
                data-pengajuan="' . formatTanggalTtd($row->waktu_pengajuan) . '" 
                class="btn btn-sm btn-primary" title="Detail"><i class="la la-eye font-small-3"></i></button> ';

                $btn_proses = '<button type="button" data-id="' . encode($row->id_user_pemohon) . '" onclick="showProsesModal(this)" class="btn btn-sm btn-info" title="Proses"><i class="la la-gear font-small-3"></i></button> ';

                $btn_proses_last = '<button type="button" data-id="' . encode($row->id_user_pemohon) . '" onclick="showConfirmModal(this)" class="btn btn-sm btn-info" title="Konfirmasi"><i class="la la-gear font-small-3"></i></button> ';

                if ($row->status == 1) { // Saat status diajukan
                    $btn .= $btn_proses;
                } else if ($row->status == 2) { // Saat status diproses
                    $btn .= $btn_proses_last;
                } else if ($row->status == 3) {
                    $btn_cetak = '<button type="button" data-id="' . encode($row->id_rpl) . '" data-idp="' . ($row->id_petugas != null ? $row->id_petugas : '') . '" data-tgl="' . ($row->tgl_cetak != null ? date('d-m-Y', strtotime($row->tgl_cetak)) : date('d-m-Y')) . '" onclick="showModalCetak(this)" class="btn btn-sm btn-info" title="Cetak Surat"><i class="la la-print font-small-3"></i></button> ';

                    $btn .= $btn_cetak;
                }
                $btn .= $btn_detail;
                $btn .= $btn_hapus;

                $columns = array(
                    $i,
                    $btn,
                    '<a href="' . base_url('upload/permohonan/rpl/' . $row->file_lampiran) . '" title="Download" target="_blank" class="h4">
                    <i class="fa fa-file-pdf-o text-danger"></i></a>',
                    $row->no_rpl,
                    date('d-m-Y', strtotime($row->waktu_pengajuan)),
                    text_uc($row->nama_pemohon),
                    text_uc($row->pekerjaan_pemohon),
                    $row->alamat_pemohon,
                    $row->lokasi,
                    text_uc($row->tujuan),
                );

                if ($status > 4) { //Jika status sudah selesai
                    if ($row->status == 3) {
                        $info_status = 'Disetujui';
                        $info_color = 'success';
                    }
                    if ($row->status == 4) {
                        $info_status = 'Ditolak';
                        $info_color = 'danger';
                    }
                    $span_info = ['<span class="badge badge-' . $info_color . ' w-100">' . $info_status . '</span>'];

                    $data[] = array_merge(array_slice($columns, 0, 4), $span_info, array_slice($columns, 4));
                } else {
                    $data[] = $columns;
                }
            }
            $output = array(
                "draw"               =>     $post["draw"],
                "recordsTotal"       =>     $this->m_rpl->getAllData($status),
                "recordsFiltered"    =>     $this->m_rpl->getFilteredData($status),
                "data"               =>     $data
            );
            echo json_encode($output);
        }
    }

    public function ubahStatusRpl($id = null, $status = 2, $msg_reason = '')
    {
        if ($id != null) {
            helper('wa');
            helper('email');

            if ($status == 2) {
                $info_status = 'diproses';
                $msg_add = "permohonan surat rekomendasi penelitian Anda sudah *" . $info_status . "*/ dan sedang ditindak lanjut oleh Admin KESBANGPOL Kabupaten Magelang mulai tanggal " . formatTanggalTtd(date('Y-m-d')) . ".";
            }
            if ($status == 3) {
                $info_status = 'disetujui';
                $msg_add = "permohonan surat rekomendasi penelitian Anda sudah *" . $info_status . "*/ oleh Admin KESBANGPOL Kabupaten Magelang mulai tanggal " . formatTanggalTtd(date('Y-m-d')) . ". Selanjutnya pemohon untuk segera mengambil *Surat Rekomendasi Penelitian*/ di kantor KESBANGPOL Kabupaten Magelang dengan membawa berkas kelengkapan sesuai yang diupload di website.";
            }
            if ($status == 4) {
                $info_status = 'ditolak';
                $msg_add = "mohon maaf permohonan surat rekomendasi penelitian Anda *" . $info_status . "*/ oleh Admin KESBANGPOL Kabupaten Magelang. Berikut detail penjelasannya:\n" . $msg_reason . "\nSilahkan bisa mengajukan ulang sesuai ketentuan.";
            }

            $id_user_pemohon = decode($id);
            $data = array(
                'status'            => $status,
                'waktu_verifikasi'  => date('Y-m-d H:i:s'),
            );
            $update_rpl = $this->m_rpl->where('id_user_pemohon', $id_user_pemohon)->set($data)->update();

            if ($update_rpl) {
                $m_user = new UserPemohonModel();
                $users = $m_user->getWhere(['id_user_pemohon' => $id_user_pemohon])->getRow();

                $pesan = "*" . $users->nama_pemohon . "*/, " . $msg_add . "\n\nSetiap notifikasi akan dikirim melalui WhatsApp & Email Anda.\n\nDikirim dari *epikir.magelangkab.go.id*/";

                $msg = str_replace('*/', '*', $pesan);
                $send_wa = send_wa($users->no_telp_pemohon, $msg);

                $msg = str_replace(['*/', '*', "\n"], ['</b>', '<b>', '<br>'], $pesan);
                $send_email = send_email($users->email_pemohon, 'Notifikasi e-Pikir', $msg);

                if ($send_wa && $send_email) {
                    $res = ['respons'   => true, 'alert' => 'Status permohonan berhasil dirubah menjadi ' . $info_status . ' & notifikasi sudah dikirim ke pemohon'];
                } else {
                    $res = ['respons'   => true, 'alert' => 'Status permohonan berhasil dirubah menjadi ' . $info_status . ' & notifikasi gagal dikirim ke pemohon'];
                }
            } else {
                $res = ['respons'   => false, 'alert' => 'Status permohonan gagal dirubah'];
            }
            return json_encode($res);
        } else {
            $res = ['respons'   => false, 'alert' => 'No process data'];
            return json_encode($res);
        }
    }

    public function deleteDataRpl($id = null)
    {
        if ($id != null) {
            $id_user_pemohon = decode($id);
            $m_user = new UserPemohonModel();

            $data_rpl = $this->m_rpl->select('file_lampiran')->where('id_user_pemohon', $id_user_pemohon)->get()->getRow();
            $file_location = 'upload/permohonan/rpl/' . $data_rpl->file_lampiran;
            if (realpath($file_location)) {
                unlink(FCPATH . $file_location); //hapus file yang akan dihapus
            }

            $delete_rpl = $m_user->delete(['id_user_pemohon' => $id_user_pemohon]);

            if ($delete_rpl) {
                $res = ['respons'   => true, 'alert' => 'Status permohonan berhasil dihapus'];
            } else {
                $res = ['respons'   => false, 'alert' => 'Status permohonan gagal dihapus'];
            }
            echo json_encode($res);
        } else {
            $res = ['respons'   => false, 'alert' => 'No process data'];
            echo json_encode($res);
        }
    }

    public function cetakSuratRpl($id = '', $idp = '')
    {
        helper('printword');
        $id = $this->request->getGet('id');
        $idp = $this->request->getGet('idp');
        $tgl = $this->request->getGet('tgl');
        if ($id == 'null' || $idp == 'null' || $idp == '') {
            return redirect()->to(base_url('kesbangpol'));
            exit();
        }
        $id_rpl = decode($id);
        $id_petugas = decode($idp);

        // Simpan data cetak ====================
        $m_cetak = new CetakSuratModel();
        $data_cetak = array(
            'id_permohonan'     => $id_rpl,
            'jenis_permohonan'  => 'rpl',
            'id_petugas'        => $id_petugas,
            'tgl_cetak'         => date('Y-m-d', strtotime($tgl)),
        );
        $cek_cetak = $m_cetak->where(['id_permohonan' => $id_rpl, 'jenis_permohonan' => 'rpl']);
        if ($cek_cetak->countAllResults(false) > 0) {
            $data_cetak['id_cetak'] = $cek_cetak->get()->getRow()->id_cetak;
        }
        $save_cetak = $m_cetak->save($data_cetak);
        // =======================================

        if ($save_cetak) {
            $m_petugas = new PetugasModel();

            $rpl = $this->m_rpl->join('tbl_user_pemohon usr', 'rpl.id_user_pemohon = usr.id_user_pemohon', 'LEFT')->getWhere(['id_rpl' => $id_rpl])->getRow();
            $pejabat = $m_petugas->getData($id_petugas)->getRow();

            if ($rpl->tgl_pelaksanaan_mulai == $rpl->tgl_pelaksanaan_akhir) {
                $waktu_penelitian = formatTanggalTtd($rpl->tgl_pelaksanaan_mulai);
            } else {
                $waktu_penelitian = formatRangeTgl($rpl->tgl_pelaksanaan_mulai, $rpl->tgl_pelaksanaan_akhir);
            }

            $data_print = array(
                "TGL_SURAT" => formatTanggalTtd($tgl),
                "NO_SURAT" => $rpl->no_rpl,
                "INSTANSI" => $rpl->nama_instansi,
                "NO_SURAT_INSTANSI" => $rpl->no_surat_permohonan,
                "TGL_SURAT_INSTANSI" => formatTanggalTtd($rpl->tgl_surat_permohonan),
                "NAMA_PEMOHON" => strtoupper($rpl->nama_pemohon),
                "PEKERJAAN_PEMOHON" => $rpl->pekerjaan_pemohon,
                "ALAMAT_PEMOHON" => $rpl->alamat_pemohon,
                "PENANGGUNG_JAWAB" => $rpl->penanggung_jawab,
                "LOKASI_PENELITIAN" => $rpl->lokasi,
                "WAKTU_PENELITIAN" => $waktu_penelitian,
                "JUDUL_PENELITIAN" => strtoupper($rpl->tujuan),

                "JABATAN_PETUGAS" => $pejabat->jabatan_petugas,
                "NAMA_PETUGAS" => strtoupper($pejabat->nama_petugas),
                "PANGKAT_PETUGAS" => $pejabat->pangkat_petugas,
                "NIP_PETUGAS" => $pejabat->nip_petugas,
            );

            echo printWord("surat/rpl/SKP.rtf", "SKP_" . $rpl->no_rpl, $data_print);
        } else {
            return redirect()->to(base_url('kesbangpol'));
        }
    }
}
