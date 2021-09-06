<?php

namespace App\Modules\Kesbangpol\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table      = 'tbl_petugas';
    protected $primaryKey = 'id_petugas';

    protected $returnType = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['id_role', 'nama_petugas', 'nip_petugas', 'pangkat_petugas', 'jabatan_petugas', 'active'];


    public function getData($id = null, $limit = 0)
    {
        if ($id === null) {
            return $this->where(['active' => 1, 'id_role' => session('id_role')])->orderBy('id_petugas', 'DESC')->findAll($limit);
        } else {
            return $this->getWhere(['id_petugas' => $id]);
        }
    }
}
