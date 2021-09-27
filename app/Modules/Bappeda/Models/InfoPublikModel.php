<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class InfoPublikModel extends Model
{
    protected $table      = 'tbl_info_publik';
    protected $primaryKey = 'id_info';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['id_user', 'nama_info', 'isi_info', 'file_info', 'waktu_update', 'status'];


    public function getData($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_info' => $id])->getRow();
        }
    }
}
