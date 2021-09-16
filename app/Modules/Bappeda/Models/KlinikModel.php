<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class KlinikModel extends Model
{
    protected $table      = 'tbl_klinik_penelitian as kpl';
    protected $primaryKey = 'id_kpl';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate
    protected $allowedFields = ['id_ipl', 'jenis_permohonan', 'keterangan', 'waktu_pengajuan', 'waktu_verifikasi', 'status'];


    public function getData($id = null)
    {
        if ($id === null) {
            return $this->orderBy('id_kpl', 'DESC')->findAll();
        } else {
            return $this->getWhere(['id_kpl' => $id])->getRow();
        }
    }

    // Data Table Server Side ==============================================

    var $select_column = array(
        'kpl.*',
        'ipl.*',
        'kpl.status as status_kpl',
        'rpl.lokasi',
        'rpl.tujuan',
        'rpl.penanggung_jawab',
        'rpl.nama_instansi',
        'rpl.no_surat_permohonan',
        'rpl.tgl_surat_permohonan',
        'rpl.tgl_pelaksanaan_mulai',
        'rpl.tgl_pelaksanaan_akhir',
        'rpl.file_lampiran as files',
        'usr.*',
    );
    var $select_column_search = array(
        'kpl.jenis_permohonan',
        'kpl.keterangan',
        'ipl.no_ipl',
        'usr.nama_pemohon',
        'usr.pekerjaan_pemohon',
        'usr.alamat_pemohon',
        'usr.no_telp_pemohon',
        'usr.email_pemohon',
        'rpl.lokasi',
        'rpl.penanggung_jawab',
        'rpl.tujuan',
        'DATE_FORMAT(kpl.waktu_pengajuan, "%d-%m-%Y")',
    );

    var $order_column = array(
        null,
        null,
        'kpl.waktu_pengajuan',
        'usr.nama_pemohon',
        'rpl.tujuan',
        'kpl.jenis_permohonan',
        'kpl.keterangan'
    );

    function makeQuery($status = '')
    {
        $this->select($this->select_column);

        $this->where('kpl.status', $status);
        $this->join('tbl_izin_penelitian ipl', 'kpl.id_ipl = ipl.id_ipl', 'LEFT');
        $this->join('tbl_rekomendasi_penelitian rpl', 'ipl.id_rpl = rpl.id_rpl', 'LEFT');
        $this->join('tbl_user_pemohon usr', 'rpl.id_user_pemohon = usr.id_user_pemohon', 'LEFT');

        $i = 0;
        foreach ($this->select_column_search as $item) {
            // if datatable send POST for search
            if ($_POST["search"]["value"]) {
                // first loop
                if ($i === 0) {
                    // open bracket
                    $this->groupStart();
                    $this->like($item, $_POST["search"]["value"]);
                } else {
                    $this->orLike($item, $_POST["search"]["value"]);
                }

                // last loop
                if (count($this->select_column_search) - 1 == $i) {
                    // close bracket
                    $this->groupEnd();
                }
            }
            $i++;
        }
        if (isset($_POST["order"])) {
            $this->orderBy($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->orderBy('kpl.waktu_pengajuan', 'DESC');
            $this->orderBy('id_kpl', 'DESC');
        }
    }

    function makeDataTable($status = '')
    {
        $this->makeQuery($status);
        if ($_POST["length"] != -1) {
            $this->limit($_POST['length'], $_POST['start']);
        }
        return $this->get()->getResult();
    }
    function getFilteredData($status = '')
    {
        $this->makeQuery($status);
        return $this->countAllResults();
    }
    function getAllData($status = '')
    {
        $this->select("*");
        $this->where('kpl.status', $status);
        return $this->countAllResults();
    }
}
