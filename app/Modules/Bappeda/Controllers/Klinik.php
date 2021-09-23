<?php

namespace App\Modules\Bappeda\Controllers;

use App\Models\MasterData;
use App\Modules\Bappeda\Controllers\BaseController;
use App\Modules\Bappeda\Models\PetugasModel;
use App\Modules\Bappeda\Models\UserPemohonModel;
use CodeIgniter\Database\BaseBuilder;

class Klinik extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function kplMasuk()
    {
        $this->v_data['status']     = '1';
        $this->v_data['active']     = '9.1';

        return views('content/klinik/kpl_masuk', 'Bappeda', $this->v_data);
    }

    public function kplProses()
    {
        $this->v_data['status']     = '2';
        $this->v_data['active']     = '9.2';

        return views('content/klinik/kpl_proses', 'Bappeda', $this->v_data);
    }

    public function kplSelesai()
    {
        $get_status = $this->request->getGet('status');
        $status = 3;
        // if ($get_status != null) {
        //     if ($get_status == 4 || $get_status == 5) {
        //         $status = $get_status;
        //     }
        // }

        // $info_status = 'Disetujui';
        // if ($status == 4) {
        //     $info_status = 'Ditolak';
        // }
        // if ($status == 5) {
        //     $info_status = 'Semua';
        // }
        $m_petugas = new PetugasModel();

        $this->v_data['status']         = $status;
        // $this->v_data['info_status']    = $info_status;
        $this->v_data['petugas']        = $m_petugas->getData();
        $this->v_data['active']         = '9.3';

        return views('content/klinik/kpl_selesai', 'Bappeda', $this->v_data);
    }

    // =====================================================

    public function prosesKpl($id = null)
    {
        if ($id != null) {
            echo $this->ubahStatusKpl($id, 2);
        }
    }

    public function setujuKpl($id = null)
    {
        if ($id != null) {
            echo $this->ubahStatusKpl($id, 3);
        }
    }

    public function tolakKpl($id = null)
    {
        $post = $this->request->getPost();
        if ($post) {
            echo $this->ubahStatusKpl($id, 4, $post['message']);
        }
    }

    // =====================================================

    public function getDataKpl($status = 1, $table = '')
    {
        $post = $this->request->getPost();
        if ($post) {
            $fetch_data = $this->m_kpl->makeDataTable($status);

            $data = array();
            $i = $post['start'];
            foreach ($fetch_data as $row) {
                $btn = '';
                $i++;

                $btn_hapus = '<button type="button" onclick="hapusData(this)" 
                data-link="' . base_url('bappeda/klinik/hapusdata/' . encode($row->id_kpl)) . '" 
                data-table="' . $table . '" 
                class="btn btn-sm btn-danger"  title="Hapus"><i class="la la-trash-o font-small-3"></i></button> ';

                $btn_detail = '<button type="button" onclick="showDetailModal(this)"
                data-id="' . encode($row->id_kpl) . '" 
                data-nama="' . text_uc($row->nama_pemohon) . '" 
                data-pekerjaan="' . text_uc($row->pekerjaan_pemohon) . '" 
                data-alamat="' . $row->alamat_pemohon . '" 
                data-hp="' . $row->no_telp_pemohon . '" 
                data-email="' . $row->email_pemohon . '" 
                data-noipl="' . $row->no_ipl . '" 
                data-penanggung="' . text_uc($row->penanggung_jawab) . '" 
                data-instansi="' . text_uc($row->nama_instansi) . '" 
                data-lokasi="' . $row->lokasi . '" 
                data-tujuan="' . text_uc($row->tujuan) . '" 
                data-file="' . $row->files . '" 
                data-mulai="' . formatTanggalTtd($row->tgl_pelaksanaan_mulai) . '" 
                data-akhir="' . formatTanggalTtd($row->tgl_pelaksanaan_akhir) . '" 
                data-pengajuan="' . formatTanggalTtd($row->waktu_pengajuan) . '" 
                class="btn btn-sm btn-primary" title="Detail"><i class="la la-eye font-small-3"></i></button> ';

                $btn_proses = '<button type="button" data-id="' . encode($row->id_user_pemohon) . '" onclick="showProsesModal(this)" class="btn btn-sm btn-info" title="Proses"><i class="la la-gear font-small-3"></i></button> ';

                $btn_proses_last = '<button type="button" data-id="' . encode($row->id_user_pemohon) . '" onclick="showConfirmModal(this)" class="btn btn-sm btn-info" title="Konfirmasi"><i class="la la-gear font-small-3"></i></button> ';

                $btn_cetak = '<button type="button" data-id="' . encode($row->id_kpl) . '" onclick="showModalCetak(this)" class="btn btn-sm btn-info" title="Cetak Surat"><i class="la la-print font-small-3"></i></button> ';

                if ($row->status_kpl == 1) { // Saat status diajukan
                    $btn .= $btn_proses;
                } else if ($row->status_kpl == 2) { // Saat status diproses
                    $btn .= $btn_proses_last;
                }
                // else if ($row->status_kpl == 3) {
                //     $btn .= $btn_cetak;
                // }
                $btn .= $btn_detail;
                $btn .= $btn_hapus;

                $columns = array(
                    $i,
                    $btn,
                    date('d-m-Y', strtotime($row->waktu_pengajuan)),
                    text_uc($row->nama_pemohon),
                    text_uc($row->tujuan),
                    ($row->jenis_permohonan == 'data' ? 'Permintaan Data' : ($row->jenis_permohonan == 'wawancara' ? 'Wawancara' : 'Lain-Lain')),
                    $row->keterangan,
                );

                $data[] = $columns;
            }
            $output = array(
                "draw"               =>     $post["draw"],
                "recordsTotal"       =>     $this->m_kpl->getAllData($status),
                "recordsFiltered"    =>     $this->m_kpl->getFilteredData($status),
                "data"               =>     $data
            );
            echo json_encode($output);
        }
    }

    public function ubahStatusKpl($id = null, $status = 2, $msg_reason = '')
    {
        if ($id != null) {
            helper('wa');
            helper('email');

            $id_user_pemohon = decode($id);
            $data = array(
                'status'            => $status,
                'waktu_verifikasi'  => date('Y-m-d H:i:s'),
            );
            $update_kpl = $this->m_kpl->whereIn('id_ipl', function (BaseBuilder $builder) use ($id_user_pemohon) {
                return $builder->select('id_ipl')->from('tbl_izin_penelitian')->whereIn('id_rpl', function (BaseBuilder $builder) use ($id_user_pemohon) {
                    return $builder->select('id_rpl')->from('tbl_rekomendasi_penelitian')->where('id_user_pemohon', $id_user_pemohon);
                });
            })->set($data)->update();

            if ($update_kpl) {
                $m_user = new UserPemohonModel();
                $users = $m_user->getWhere(['id_user_pemohon' => $id_user_pemohon])->getRow();

                if ($status == 2) {
                    $msg_add = "Permohonan klinik penelitian Anda sudah *diproses*/ dan sedang ditindak lanjut oleh Admin Bappeda Litbangda Kabupaten Magelang mulai tanggal " . formatTanggalTtd(date('Y-m-d')) . ". Selanjutnya jika disetujui Admin akan menghubungi langsung melalui WhatsApp Anda.";

                    $pesan = "*" . $users->nama_pemohon . "*/, " . $msg_add . "\n\nDikirim dari *epikir.magelangkab.go.id*/";

                    $msg = str_replace('*/', '*', $pesan);
                    $send_wa = send_wa($users->no_telp_pemohon, $msg);

                    $msg = str_replace(['*/', '*', "\n"], ['</b>', '<b>', '<br>'], $pesan);
                    $send_email = send_email($users->email_pemohon, 'Notifikasi e-Pikir', $msg);

                    if ($send_wa && $send_email) {
                        $res = ['respons'   => true, 'alert' => 'Status permohonan berhasil dirubah menjadi diproses & notifikasi sudah dikirim ke pemohon'];
                    } else {
                        $res = ['respons'   => true, 'alert' => 'Status permohonan berhasil dirubah menjadi diproses & notifikasi gagal dikirim ke pemohon'];
                    }
                } else {
                    $res = ['respons'   => true, 'alert' => 'Status permohonan berhasil dirubah menjadi selesai'];
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

    public function deleteDataKpl($id = null)
    {
        if ($id != null) {
            $id_kpl = decode($id);
            $masterdata = new MasterData();
            $delete_kpl = $masterdata->deleteData(['id_kpl' => $id_kpl], 'tbl_klinik_penelitian');

            if ($delete_kpl) {
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
}
