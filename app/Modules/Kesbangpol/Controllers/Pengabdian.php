<?php

namespace App\Modules\Kesbangpol\Controllers;

use App\Modules\Kesbangpol\Models\PetugasModel;
use App\Modules\Kesbangpol\Models\UserPemohonModel;

class Pengabdian extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function rpbMasuk()
    {
        $this->v_data['status']     = '1';
        $this->v_data['active']     = '3.1';

        return views('content/pengabdian/rpb_masuk', 'Kesbangpol', $this->v_data);
    }

    public function rpbProses()
    {
        $this->v_data['status']     = '2';
        $this->v_data['active']     = '3.2';

        return views('content/pengabdian/rpb_proses', 'Kesbangpol', $this->v_data);
    }

    public function rpbSelesai()
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
        $this->v_data['active']         = '3.3';

        return views('content/pengabdian/rpb_selesai', 'Kesbangpol', $this->v_data);
    }

    // =====================================================

    public function prosesRpb($id = null)
    {
        if ($id != null) {
            echo $this->ubahStatusRpb($id, 2);
        }
    }

    public function setujuRpb($id = null)
    {
        if ($id != null) {
            echo $this->ubahStatusRpb($id, 3);
        }
    }

    public function tolakRpb($id = null)
    {
        $post = $this->request->getPost();
        if ($post) {
            echo $this->ubahStatusRpb($id, 4, $post['message']);
        }
    }

    // =====================================================

    public function getDataRpb($status = 1, $table = '')
    {
        $post = $this->request->getPost();
        if ($post) {
            $fetch_data = $this->m_rpb->makeDataTable($status);

            $data = array();
            $i = $post['start'];
            foreach ($fetch_data as $row) {
                $btn = '';
                $i++;

                $btn_hapus = '<button type="button" onclick="hapusData(this)" 
                data-link="' . base_url('kesbangpol/pengabdian/hapusdata/' . encode($row->id_user_pemohon)) . '" 
                data-table="' . $table . '" 
                class="btn btn-sm btn-danger"  title="Hapus"><i class="la la-trash-o font-small-3"></i></button> ';

                $btn_detail = '<button type="button" onclick="showDetailModal(this)"
                data-id="' . encode($row->id_user_pemohon) . '" 
                data-nama="' . text_uc($row->nama_pemohon) . '" 
                data-pekerjaan="' . text_uc($row->pekerjaan_pemohon) . '" 
                data-alamat="' . $row->alamat_pemohon . '" 
                data-hp="' . $row->no_telp_pemohon . '" 
                data-email="' . $row->email_pemohon . '" 
                data-norpb="' . $row->no_rpb . '" 
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

                $btn_cetak = '<button type="button" data-id="' . encode($row->id_rpb) . '" onclick="showModalCetak(this)" class="btn btn-sm btn-info" title="Cetak Surat"><i class="la la-print font-small-3"></i></button> ';

                if ($row->status == 1) { // Saat status diajukan
                    $btn .= $btn_proses;
                } else if ($row->status == 2) { // Saat status diproses
                    $btn .= $btn_proses_last;
                } else if ($row->status == 3) {
                    $btn .= $btn_cetak;
                }
                $btn .= $btn_detail;
                $btn .= $btn_hapus;

                $columns = array(
                    $i,
                    $btn,
                    '<a href="' . base_url('upload/permohonan/rpb/' . $row->file_lampiran) . '" title="Download" target="_blank" class="h4">
                    <i class="fa fa-file-pdf-o text-danger"></i></a>',
                    $row->no_rpb,
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
                "recordsTotal"       =>     $this->m_rpb->getAllData($status),
                "recordsFiltered"    =>     $this->m_rpb->getFilteredData($status),
                "data"               =>     $data
            );
            echo json_encode($output);
        }
    }

    public function ubahStatusRpb($id = null, $status = 2, $msg_reason = '')
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
            $update_rpb = $this->m_rpb->where('id_user_pemohon', $id_user_pemohon)->set($data)->update();

            if ($update_rpb) {
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

    public function deleteDataRpb($id = null)
    {
        if ($id != null) {
            $id_user_pemohon = decode($id);
            $m_user = new UserPemohonModel();

            $data_rpb = $this->m_rpb->select('file_lampiran')->where('id_user_pemohon', $id_user_pemohon)->get()->getRow();
            $file_location = 'upload/permohonan/rpb/' . $data_rpb->file_lampiran;
            if (realpath($file_location)) {
                unlink(FCPATH . $file_location); //hapus file yang akan dihapus
            }

            $delete_rpb = $m_user->delete(['id_user_pemohon' => $id_user_pemohon]);

            if ($delete_rpb) {
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

    public function cetakSuratRpb($id = '', $idp = '')
    {
        $id = $this->request->getGet('id');
        $idp = $this->request->getGet('idp');
        $tgl = $this->request->getGet('tgl');
        if ($id == null && $idp == null) {
            return redirect()->to(base_url('admin'));
            exit();
        }
        $id_rpb = decode($id);
        $id_petugas = decode($idp);

        $m_petugas = new PetugasModel();

        $rpb = $this->m_rpb->join('tbl_user_pemohon usr', 'rpb.id_user_pemohon = usr.id_user_pemohon', 'LEFT')->getWhere(['id_rpb' => $id_rpb])->getRow();
        $pejabat = $m_petugas->getData($id_petugas)->getRow();

        if ($rpb->tgl_pelaksanaan_mulai == $rpb->tgl_pelaksanaan_akhir) {
            $waktu_penelitian = formatTanggalTtd($rpb->tgl_pelaksanaan_mulai);
        } else {
            $waktu_penelitian = formatRangeTgl($rpb->tgl_pelaksanaan_mulai, $rpb->tgl_pelaksanaan_akhir);
        }

        $document = file_get_contents(FCPATH . "surat/rpb/SKP.rtf");

        $document = str_replace("[TGL_SURAT]", formatTanggalTtd($tgl), $document);
        $document = str_replace("[NO_SURAT]", $rpb->no_rpb, $document);
        $document = str_replace("[INSTANSI]", $rpb->nama_instansi, $document);
        $document = str_replace("[NO_SURAT_INSTANSI]", $rpb->no_surat_permohonan, $document);
        $document = str_replace("[TGL_SURAT_INSTANSI]", formatTanggalTtd($rpb->tgl_surat_permohonan), $document);
        $document = str_replace("[NAMA_PEMOHON]", strtoupper($rpb->nama_pemohon), $document);
        $document = str_replace("[PEKERJAAN_PEMOHON]", $rpb->pekerjaan_pemohon, $document);
        $document = str_replace("[ALAMAT_PEMOHON]", $rpb->alamat_pemohon, $document);
        $document = str_replace("[PENANGGUNG_JAWAB]", $rpb->penanggung_jawab, $document);
        $document = str_replace("[LOKASI_PENELITIAN]", $rpb->lokasi, $document);
        $document = str_replace("[WAKTU_PENELITIAN]", $waktu_penelitian, $document);
        $document = str_replace("[JUDUL_PENELITIAN]", strtoupper($rpb->tujuan), $document);

        $document = str_replace("[JABATAN_PETUGAS]", $pejabat->jabatan_petugas, $document);
        $document = str_replace("[NAMA_PETUGAS]", strtoupper($pejabat->nama_petugas), $document);
        $document = str_replace("[PANGKAT_PETUGAS]", $pejabat->pangkat_petugas, $document);
        $document = str_replace("[NIP_PETUGAS]", $pejabat->nip_petugas, $document);

        $response = service('response');
        $response->setHeader("Content-type", "application/msword");
        $response->setHeader("Content-disposition", "attachment; filename=SKP_" . $rpb->no_rpb . ".doc");
        // $response->setHeader("Content-length", strlen($document));

        echo $document;
    }
}
