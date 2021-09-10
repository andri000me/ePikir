<?php

namespace App\Modules\Dpmptsp\Models;

use CodeIgniter\Model;

class UserPemohonModel extends Model
{
    protected $table      = 'tbl_user_pemohon';
    protected $primaryKey = 'id_user_pemohon';

    protected $returnType = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['nama_pemohon', 'pekerjaan_pemohon', 'alamat_pemohon', 'no_telp_pemohon', 'email_pemohon'];


    public function getData($id = null, $limit = 5)
    {
        if ($id === null) {
            return $this->findAll($limit);
        } else {
            return $this->getWhere(['id_user_pemohon' => $id]);
        }
    }
}
