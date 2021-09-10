<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table      = 'tbl_galeri';
    protected $primaryKey = 'id_galeri';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate
    protected $allowedFields = ['id_user', 'id_kg', 'judul_galeri', 'ket_galeri', 'waktu_kegiatan', 'file_foto', 'link_video', 'waktu_update', 'jenis_galeri', 'active'];


    public function getData($id = null)
    {
        if ($id === null) {
            return $this->select(['id_galeri', 'id_user', 'tbl_galeri.id_kg', 'judul_galeri', 'ket_galeri', 'waktu_kegiatan', 'file_foto', 'link_video', 'waktu_update', 'jenis_galeri', 'tbl_galeri.active'])->findAll();
        } else {
            return $this->getWhere(['id_galeri' => $id])->getRow();
        }
    }
}
