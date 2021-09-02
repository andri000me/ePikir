<?php

namespace App\Modules\Kesbangpol\Models;

use CodeIgniter\Model;

class RekomendasiPenelitianModel extends Model
{
    protected $table      = 'tbl_rekomendasi_penelitian as rpl';
    protected $primaryKey = 'id_rpl';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['no_rpl', 'id_user_pemohon', 'penanggung_jawab', 'lokasi', 'tujuan', 'file_lampiran', 'tgl_pelaksanaan_mulai', 'tgl_pelaksanaan_akhir', 'waktu_pengajuan', 'waktu_verifikasi', 'status'];


    public function getData($id = null, $limit = 0)
    {
        if ($id === null) {
            return $this->findAll($limit);
        } else {
            return $this->getWhere(['id_rpl' => $id]);
        }
    }

    // Data Table Server Side ==============================================

    var $select_column = array(
        'rpl.*',
        'usr.*',
    );
    var $select_column_search = array(
        'id_rpl',
        'no_rpl',
        'usr.nama_pemohon',
        'usr.pekerjaan_pemohon',
        'usr.alamat_pemohon',
        'usr.no_telp_pemohon',
        'usr.email_pemohon',
        'lokasi',
        'file_lampiran',
        'penanggung_jawab',
        'tujuan',
        'DATE_FORMAT(waktu_pengajuan, "%d-%m-%Y")',
        'DATE_FORMAT(tgl_pelaksanaan_mulai, "%d-%m-%Y")',
        'DATE_FORMAT(tgl_pelaksanaan_akhir, "%d-%m-%Y")',
    );

    var $order_column = array(
        null,
        null,
        'no_rpl',
        'waktu_pengajuan',
        'usr.nama_pemohon',
        'usr.pekerjaan_pemohon',
        'usr.alamat_pemohon',
        'lokasi',
        'file_lampiran',
    );

    function makeQuery($status = '')
    {
        $this->select($this->select_column);
        if ($status == 5) {
            $this->where('status >', 2);
        } else {
            $this->where('status', $status);
        }
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
            $this->orderBy('waktu_pengajuan', 'DESC');
            $this->orderBy('id_rpl', 'DESC');
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
        $this->where('status', $status);
        return $this->countAllResults();
    }
}
