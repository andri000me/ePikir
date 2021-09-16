<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\CarouselModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Carousel extends BaseController
{
    private $m_carousel;
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_carousel = new CarouselModel();
    }

    public function index()
    {
        helper('text');
        $this->v_data['active'] = '10';
        $this->v_data['carousel'] = $this->m_carousel->orderBy('id_carousel', 'ASC')->getData(null, 3);

        return views('content/carousel/list_carousel', 'Bappeda', $this->v_data);
    }

    public function addCarousel()
    {
        $this->v_data['active'] = '10';

        return views('content/carousel/form_carousel', 'Bappeda', $this->v_data);
    }

    public function editCarousel($id)
    {
        $this->v_data['active'] = '10';
        $this->v_data['carousel'] = $this->m_carousel->getData(decode($id));
        $this->v_data['myid']   = $id;

        return views('content/carousel/form_carousel', 'Bappeda', $this->v_data);
    }

    public function changeActive($active = 0, $id = '')
    {
        if ($id != '') {
            if ($active > 1) {
                $active = 1;
            }

            if ($active == 1) {
                $cek_active = $this->m_carousel->where('active', 1)->countAllResults();
                if ($cek_active < 3) {
                    $simpan = $this->m_carousel->set(['active' => $active])->where(['id_carousel' => decode($id)])->update();
                    $alert = 'Carousel diaktifkan';
                } else {
                    $res = ['respons' => false, 'alert' => 'Jumlah carousel aktif sudah 3', 'data' => decode($id)];
                    echo json_encode($res);
                    exit();
                }
            } else {
                $simpan = $this->m_carousel->set(['active' => $active])->where(['id_carousel' => decode($id)])->update();
                $alert = 'Carousel dinon-aktifkan';
            }

            if ($simpan) {
                $res = ['respons' => true, 'alert' => $alert];
            } else {
                $res = ['respons' => false, 'alert' => 'Gagal ubah status carousel', 'data' => decode($id)];
            }
        } else {
            $res = ['respons' => false, 'alert' => 'Ubah status carousel gagal', 'data' => decode($id)];
        }
        echo json_encode($res);
    }

    public function saveCarousel()
    {
        helper('upload');

        $post = $this->request->getPost();

        if ($post) {
            $data = [
                'judul_carousel'    => $post['judul_carousel'],
                'ket_carousel'      => $post['ket_carousel'],
                // 'file_carousel'     => $post['file_carousel'],
                'active'            => 1
            ];

            $file = $this->request->getFile('file_carousel');

            // Jika post id_carousel maka update
            if ($post['id_carousel'] != '') {
                $data['id_carousel'] = decode($post['id_carousel']);
                $data_carousel = $this->m_carousel->getData($data['id_carousel']);

                $data['file_carousel'] = $data_carousel->file_carousel;

                // Cek apakah post file kosong/tidak
                if ($file != '') {
                    $upload = upload_files($file, FCPATH . 'upload/slider');

                    if ($upload['respons']) {
                        $data['file_carousel'] = $upload['data'];

                        $file_location = 'upload/slider/' . $data_carousel->file_carousel;
                        if (realpath($file_location)) {
                            unlink(FCPATH . $file_location); //hapus file yang akan diupdate
                        }
                    }
                }
            } else {
                $upload = upload_files($file, FCPATH . 'upload/slider');

                if ($upload['respons']) {
                    $data['file_carousel'] = $upload['data'];
                }
            }

            $save = $this->m_carousel->save($data);

            if ($save) {
                alert_success('Berhasil simpan data');
            } else {
                alert_failed('Gagal simpan data');
            }

            return redirect()->to(base_url('bappeda/carousel'));
        } else {
            // alert_failed('Gagal simpan data');
            // return redirect()->to(base_url('bappeda/carousel'));
            throw PageNotFoundException::forPageNotFound();
        }
    }

    public function deleteCarousel($id)
    {
        if ($id != null) {
            $id_carousel = decode($id);

            $data_carousel = $this->m_carousel->getData($id_carousel);
            $file_location = 'upload/slider/' . $data_carousel->file_carousel;
            if (realpath($file_location)) {
                unlink(FCPATH . $file_location); //hapus file
            }


            $delete_data = $this->m_carousel->delete(['id_carousel' => $id_carousel]);

            if ($delete_data) {
                $res = ['respons'   => true, 'alert' => 'Data berhasil dihapus'];
            } else {
                $res = ['respons'   => false, 'alert' => 'Data gagal dihapus'];
            }
            echo json_encode($res);
        } else {
            $res = ['respons'   => false, 'alert' => 'No process data'];
            echo json_encode($res);
        }
    }
}
