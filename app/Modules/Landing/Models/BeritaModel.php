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
    protected $allowedFields = ['id_user', 'id_kb', 'judul_berita', 'isi_berita', 'file_foto', 'waktu_update', 'active'];


    public function getData($id = null, $limit = 0, $paging = false, $search = null, $where = null, $order = 'DESC', $count = false)
    {
        if ($id === null) {
            $this->join('tbl_kategori_berita as tkb', 'tb.id_kb = tkb.id_kb', 'LEFT');
            $this->where('tb.active', 1);
            if ($where != null) {
                $this->where($where);
            }
            $this->orderBy('tb.waktu_update', 'DESC');
            $this->orderBy('tb.id_berita', $order);
            if ($search != null) {
                $this->like('tb.judul_berita', $search);
                $this->orLike('tb.isi_berita', $search);
                $this->orLike('tkb.nama_kategori', $search);
            }
            if ($paging) {
                return $this->paginate($limit, 'berita');
            } else {
                if ($limit == 1) {
                    return $this->get()->getRow();
                } else {
                    if ($count) {
                        return $this->countAllResults(false);
                    } else {
                        return $this->findAll($limit);
                    }
                }
            }
        } else {
            return $this->join('tbl_kategori_berita as tkb', 'tb.id_kb = tkb.id_kb', 'LEFT')->getWhere(['id_berita' => $id])->getRow();
        }
    }
}
