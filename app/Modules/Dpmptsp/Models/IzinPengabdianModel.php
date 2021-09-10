<?php

namespace App\Modules\Dpmptsp\Models;

use CodeIgniter\Model;

class IzinPengabdianModel extends Model
{
    protected $table      = 'tbl_izin_pengabdian as ipb';
    protected $primaryKey = 'id_ipb';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['no_ipb', 'id_rpb', 'file_lampiran', 'waktu_pengajuan', 'waktu_verifikasi', 'status'];


    public function getData($id = null, $limit = 0)
    {
        if ($id === null) {
            return $this->findAll($limit);
        } else {
            return $this->getWhere(['id_ipb' => $id]);
        }
    }

    // Data Table Server Side ==============================================

    var $select_column = array(
        'ipb.*',
        // 'rpb.no_rpb',
        'rpb.lokasi',
        'rpb.tujuan',
        'rpb.penanggung_jawab',
        'rpb.nama_instansi',
        'rpb.no_surat_permohonan',
        'rpb.tgl_surat_permohonan',
        'rpb.tgl_pelaksanaan_mulai',
        'rpb.tgl_pelaksanaan_akhir',
        'usr.*',
    );
    var $select_column_search = array(
        'id_ipb',
        'no_ipb',
        'usr.nama_pemohon',
        'usr.pekerjaan_pemohon',
        'usr.alamat_pemohon',
        'usr.no_telp_pemohon',
        'usr.email_pemohon',
        'rpb.lokasi',
        'ipb.file_lampiran',
        'rpb.penanggung_jawab',
        'rpb.tujuan',
        'DATE_FORMAT(ipb.waktu_pengajuan, "%d-%m-%Y")',
        'DATE_FORMAT(rpb.tgl_pelaksanaan_mulai, "%d-%m-%Y")',
        'DATE_FORMAT(rpb.tgl_pelaksanaan_akhir, "%d-%m-%Y")',
    );

    var $order_column = array(
        null,
        null,
        'no_ipb',
        'ipb.waktu_pengajuan',
        'usr.nama_pemohon',
        'usr.pekerjaan_pemohon',
        'usr.alamat_pemohon',
        'rpb.lokasi',
        'ipb.file_lampiran',
    );

    function makeQuery($status = '')
    {
        $this->select($this->select_column);
        if ($status == 5) {
            $this->where('ipb.status >', 2);
        } else {
            $this->where('ipb.status', $status);
        }
        $this->where('rpb.status = 3');
        $this->join('tbl_rekomendasi_pengabdian rpb', 'ipb.id_rpb = rpb.id_rpb', 'LEFT');
        $this->join('tbl_user_pemohon usr', 'rpb.id_user_pemohon = usr.id_user_pemohon', 'LEFT');

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
            $this->orderBy('ipb.waktu_pengajuan', 'DESC');
            $this->orderBy('id_ipb', 'DESC');
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
            $this->where('ipb.status >', 2);
        } else {
            $this->where('ipb.status', $status);
        }
        return $this->countAllResults();
    }
}
