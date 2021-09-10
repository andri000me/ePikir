<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class RenjaModel extends Model
{
    protected $table      = 'tbl_rencana_kerja';
    protected $primaryKey = 'id_rk';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate
    protected $allowedFields = ['id_user', 'tahun_rk', 'file_rk', 'waktu_update', 'active'];


    public function getData($id = null)
    {
        if ($id === null) {
            return $this->where('active = 1')->findAll();
        } else {
            return $this->getWhere(['id_rk' => $id])->getRow();
        }
    }
}
