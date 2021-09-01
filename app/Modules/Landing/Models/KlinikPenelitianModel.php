<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class KlinikPenelitianModel extends Model
{
    protected $table      = 'tbl_klinik_penelitian';
    protected $primaryKey = 'id_kpl';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['id_ipl', 'jenis_permohonan', 'keterangan', 'waktu_pengajuan', 'waktu_verifikasi', 'status'];


    public function getData($limit = 0)
    {
        $this->join('tbl_izin_penelitian as ipl', 'kpl.id_ipl = ipl.id_ipl', 'LEFT');
        $this->join('tbl_rekomendasi_penelitian as rpl', 'ipl.id_rpl = rpl.id_rpl', 'LEFT');
        $this->orderBy('kpl.waktu_pengajuan', 'DESC');
        $this->orderBy('kpl.id_kpl', 'DESC');
        return $this->findAll($limit);
    }
}
