<?php

namespace App\Modules\Dpmptsp\Models;

use CodeIgniter\Model;

class IzinPenelitianModel extends Model
{
    protected $table      = 'tbl_izin_penelitian as ipl';
    protected $primaryKey = 'id_ipl';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['no_ipl', 'id_rpl', 'file_lampiran', 'waktu_pengajuan', 'waktu_verifikasi', 'status'];


    public function getData($id = null, $limit = 0)
    {
        if ($id === null) {
            return $this->findAll($limit);
        } else {
            return $this->getWhere(['id_ipl' => $id]);
        }
    }

    // Data Table Server Side ==============================================

    var $select_column = array(
        'ipl.*',
        // 'rpl.no_rpl',
        'rpl.lokasi',
        'rpl.tujuan',
        'rpl.penanggung_jawab',
        'rpl.nama_instansi',
        'rpl.no_surat_permohonan',
        'rpl.tgl_surat_permohonan',
        'rpl.tgl_pelaksanaan_mulai',
        'rpl.tgl_pelaksanaan_akhir',
        'usr.*',
    );
    var $select_column_search = array(
        'id_ipl',
        'no_ipl',
        'usr.nama_pemohon',
        'usr.pekerjaan_pemohon',
        'usr.alamat_pemohon',
        'usr.no_telp_pemohon',
        'usr.email_pemohon',
        'rpl.lokasi',
        'ipl.file_lampiran',
        'rpl.penanggung_jawab',
        'rpl.tujuan',
        'DATE_FORMAT(ipl.waktu_pengajuan, "%d-%m-%Y")',
        'DATE_FORMAT(rpl.tgl_pelaksanaan_mulai, "%d-%m-%Y")',
        'DATE_FORMAT(rpl.tgl_pelaksanaan_akhir, "%d-%m-%Y")',
    );

    var $order_column = array(
        null,
        null,
        'no_ipl',
        'ipl.waktu_pengajuan',
        'usr.nama_pemohon',
        'usr.pekerjaan_pemohon',
        'usr.alamat_pemohon',
        'rpl.lokasi',
        'ipl.file_lampiran',
    );

    function makeQuery($status = '')
    {
        $this->select($this->select_column);
        if ($status == 5) {
            $this->where('ipl.status >', 2);
        } else {
            $this->where('ipl.status', $status);
        }
        $this->where('rpl.status = 3');
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
            $this->orderBy('ipl.waktu_pengajuan', 'DESC');
            $this->orderBy('id_ipl', 'DESC');
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
        if ($status == 5) {
            $this->where('ipl.status >', 2);
        } else {
            $this->where('ipl.status', $status);
        }
        return $this->countAllResults();
    }
}
