<?php

namespace App\Modules\Dpmptsp\Models;

use CodeIgniter\Model;

class UserAdminModel extends Model
{
    protected $table      = 'tbl_user';
    protected $primaryKey = 'id_user';

    protected $returnType = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    protected $useSoftDeletes = true;

    //set nama kolom delete pada tabel dengan type datetime
    protected $deletedField = 'deleted_at';

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['id_role', 'nama_user', 'username', 'password', 'active'];


    public function getData($id = null, $limit = 0)
    {
        if ($id === null) {
            return $this->findAll($limit);
        } else {
            return $this->getWhere(['id_user' => $id])->getRow();
        }
    }
}
