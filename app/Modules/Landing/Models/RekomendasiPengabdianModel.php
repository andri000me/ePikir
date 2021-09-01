<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class RekomendasiPengabdianModel extends Model
{
    protected $table      = 'tbl_rekomendasi_pengabdian';
    protected $primaryKey = 'id_rpb';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['no_rpb', 'id_user_pemohon', 'penanggung_jawab', 'lokasi', 'tujuan', 'file_lampiran', 'tgl_pelaksanaan_mulai', 'tgl_pelaksanaan_akhir', 'waktu_pengajuan', 'waktu_verifikasi', 'status'];


    public function getData($id = null, $limit = 0)
    {
        if ($id === null) {
            return $this->findAll($limit);
        } else {
            return $this->getWhere(['id_rpb' => $id]);
        }
    }
}
