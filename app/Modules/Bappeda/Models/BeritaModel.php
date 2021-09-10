<?php

namespace App\Modules\Bappeda\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'tbl_berita as tb';
    protected $primaryKey = 'id_berita';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate
    protected $allowedFields = ['id_user', 'id_kb', 'judul_berita', 'isi_berita', 'file_foto', 'waktu_update', 'active'];

    public function getData($id = null)
    {
        if ($id === null) {
            return $this->select(['id_berita', 'tb.id_kb', 'judul_berita', 'isi_berita', 'file_foto', 'waktu_update', 'tb.active'])->findAll();
        } else {
            return $this->getWhere(['id_berita' => $id])->getRow();
        }
    }
}
