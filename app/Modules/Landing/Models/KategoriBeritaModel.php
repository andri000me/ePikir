<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class KategoriBeritaModel extends Model
{
    protected $table      = 'tbl_kategori_berita as kb';
    protected $primaryKey = 'id_kb';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['nama_kategori', 'active'];


    public function getData()
    {
        $this->select('kb.*');
        $this->select("(SELECT COUNT(tb.id_berita) FROM tbl_berita tb WHERE tb.id_kb = kb.id_kb) as jml_berita");
        return $this->get()->getResult();
    }
}
