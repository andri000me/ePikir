<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class IzinPenelitianModel extends Model
{
    protected $table      = 'tbl_izin_penelitian';
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
}
