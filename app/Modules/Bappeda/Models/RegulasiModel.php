<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class RegulasiModel extends Model
{
    protected $table      = 'tbl_regulasi';
    protected $primaryKey = 'id_regulasi';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate
    protected $allowedFields = ['id_user', 'nama_regulasi', 'isi_regulasi', 'file_regulasi', 'waktu_update', 'active'];


    public function getData($id = null)
    {
        if ($id === null) {
            return $this->where('active = 1')->findAll();
        } else {
            return $this->getWhere(['id_regulasi' => $id])->getRow();
        }
    }
}
