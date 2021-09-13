<?php

namespace App\Modules\Kesbangpol\Models;

use CodeIgniter\Model;

class CetakSuratModel extends Model
{
    protected $table      = 'tbl_cetak_surat';
    protected $primaryKey = 'id_cetak';

    protected $returnType = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['id_permohonan', 'jenis_permohonan', 'id_petugas', 'tgl_cetak'];


    public function getData($id = null)
    {
        return $this->getWhere(['id_cetak' => $id]);
    }
}
