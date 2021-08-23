<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class RenjaModel extends Model
{
    protected $table      = 'tbl_rencana_kerja';
    protected $primaryKey = 'id_rk';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['id_user', 'tahun_rk', 'file_rk', 'waktu_update', 'status'];


    public function getData($id = null)
    {
        if ($id === null) {
            return $this->getWhere(['tahun_rk' => date('Y'), 'active' => 1])->getRow();
        } else {
            return $this->getWhere(['id_rk' => $id])->getRow();
        }
    }
}
