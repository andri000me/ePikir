<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table      = 'tbl_role';
    protected $primaryKey = 'id_role';

    protected $returnType = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['nama_role'];


    public function getData($id = null, $limit = 0)
    {
        if ($id === null) {
            return $this->findAll($limit);
        } else {
            return $this->getWhere(['id_role' => $id])->getRow();
        }
    }
}
