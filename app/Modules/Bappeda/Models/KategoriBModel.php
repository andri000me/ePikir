<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class KategoriBModel extends Model
{
    protected $table      = 'tbl_kategori_berita';
    protected $primaryKey = 'id_kb';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    protected $useSoftDeletes = true;

    //set nama kolom delete pada tabel dengan type datetime
    protected $deletedField  = 'deleted_at';

    // set untuk kolom yang dapat di insert atau diupdate
    protected $allowedFields = ['id_kb', 'nama_kategori', 'active'];

    public function getData($id = null, $active = 1)
    {
        if ($id === null) {
            if ($active != null) {
                $this->where("active = $active");
            }
            return $this->findAll();
        } else {
            return $this->getWhere(['id_kb' => $id])->getRow();
        }
    }
}
