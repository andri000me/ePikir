<?php namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class CarouselModel extends Model
{
    protected $table      = 'tbl_carousel';
    protected $primaryKey = 'id_carousel';
 
    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;
 
    // set untuk kolom yang dapat di insert atau diupdate adalah kolom name, dan price
    protected $allowedFields = ['judul_carousel', 'ket_carousel', 'file_carousel', 'status'];
    
    // set bagian useTimestamps kita set true agar mencatat bagian created_at dan updated_at
    // protected $useTimestamps = true;

    // untuk setting waktu insert, update, delete data disimpan di kolom created_at, updated_at, deleted_at (If useSoftDeletes = true)
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

 
    public function getData($id = false, $limit = 5)
    {
        if($id === false){
            return $this->where('status', 1)->findAll($limit);
        }else{
            return $this->getWhere(['id_carousel' => $id]);
        }   
    }
}