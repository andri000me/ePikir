<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class KategoriGModel extends Model
{
    protected $table      = 'tbl_kategori_galeri';
    protected $primaryKey = 'id_kg';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    protected $useSoftDeletes = true;

    //set nama kolom delete pada tabel dengan type datetime
    protected $deletedField  = 'deleted_at';

    // set untuk kolom yang dapat di insert atau diupdate
    protected $allowedFields = ['id_kg', 'nama_kategori', 'active'];

    public function getData($id = null, $active = 1)
    {
        if ($id === null) {
            if ($active != null) {
                $this->where("active = $active");
            }
            return $this->findAll();
        } else {
            return $this->getWhere(['id_kg' => $id])->getRow();
        }
    }
}
