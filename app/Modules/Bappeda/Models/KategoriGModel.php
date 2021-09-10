<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class KategoriGModel extends Model
{
    protected $table      = 'tbl_kategori_galeri';
    protected $primaryKey = 'id_kg';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate
    protected $allowedFields = ['id_kg', 'nama_kategori', 'active'];

    // set bagian useTimestamps kita set true agar mencatat bagian created_at dan updated_at
    // protected $useTimestamps = true;

    // untuk setting waktu insert, update, delete data disimpan di kolom created_at, updated_at, deleted_at (If useSoftDeletes = true)
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    public function getData($id = null)
    {
        if ($id === null) {
            return $this->where('active = 1')->findAll();
        } else {
            return $this->getWhere(['id_kg' => $id])->getRow();
        }
    }

}
