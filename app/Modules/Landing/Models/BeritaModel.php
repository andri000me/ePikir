<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'tbl_berita as tb';
    protected $primaryKey = 'id_berita';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['id_user', 'id_kb', 'judul_berita', 'isi_berita', 'file_foto', 'waktu_update', 'status'];


    public function getData($id = false, $limit = 0)
    {
        if ($id === false) {
            return $this->where('tb.status', 1)
                ->join('tbl_kategori_berita as tkb', 'tb.id_kb = tkb.id_kb', 'LEFT')
                ->orderBy('tb.waktu_update', 'DESC')
                ->findAll($limit);
        } else {
            return $this->join('tbl_kategori_berita as tkb', 'tb.id_kb = tkb.id_kb', 'LEFT')->getWhere(['id_berita' => $id])->getResult();
        }
    }
}
