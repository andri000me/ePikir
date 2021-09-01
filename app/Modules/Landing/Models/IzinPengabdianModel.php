<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class IzinPengabdianModel extends Model
{
    protected $table      = 'tbl_izin_pengabdian';
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
}
