<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\RoleModel;
use App\Modules\Bappeda\Models\UserAdminModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class User extends BaseController
{
    private $m_user;
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_user = new UserAdminModel();
    }

    public function index()
    {
        $this->v_data['active'] = '6';
        $this->v_data['user'] = $this->m_user->join('tbl_role rl', 'tbl_user.id_role = rl.id_role')->orderBy('id_user DESC')->getData();

        return views('content/user/list_user', 'Bappeda', $this->v_data);
    }

    #rencana kerja proses crud
    public function addUser()
    {
        $m_role = new RoleModel();
        $this->v_data['role'] = $m_role->getData();
        $this->v_data['active'] = '6';

        return views('content/user/form_user', 'Bappeda', $this->v_data);
    }

    public function editUser($id)
    {
        $m_role = new RoleModel();
        $this->v_data['role'] = $m_role->getData();
        $this->v_data['user'] = $this->m_user->getData(decode($id));
        $this->v_data['active']  = '6';

        return views('content/user/form_user', 'Bappeda', $this->v_data);
    }
    #end rencana kerja

    public function saveUser()
    {

        $post = $this->request->getPost();

        if ($post) {
            $data = [
                'id_role' => decode($post['role']),
                'nama_user' => $post['nama_user'],
                'username' => $post['username'],
                'active' => 1
            ];

            if ($post['password'] != '' || $post['password'] != null) {
                $data['password'] = md5($post['password']);
            }

            // Jika post id_user maka update
            if ($post['id_user'] != '') {
                $data['id_user'] = decode($post['id_user']);
            }

            if ($this->m_user->save($data)) {
                alert_success('Berhasil simpan data');
            } else {
                alert_failed('Gagal simpan data');
            }

            return redirect()->to(base_url('bappeda/user'));
        } else {
            // alert_failed('Gagal Menambah user');
            // return redirect()->to(base_url('bappeda/user'));
            throw PageNotFoundException::forPageNotFound();
        }
    }

    public function deleteUser($id)
    {
        if ($id != null) {
            $id_user = decode($id);

            $delete_data = $this->m_user->delete(['id_user' => $id_user]);

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

    public function changeActive($active = 0, $id = '')
    {
        if ($id != '') {
            if ($active > 1) {
                $active = 1;
            }

            $simpan = $this->m_user->set(['active' => $active])->where(['id_user' => decode($id)])->update();
            if ($simpan) {
                if ($active == 1) {
                    $alert = 'User admin diaktifkan';
                } else {
                    $alert = 'User admin dinon-aktifkan';
                }
                $res = ['respons' => true, 'alert' => $alert];
            } else {
                $res = ['respons' => false, 'alert' => 'Gagal ubah status user admin'];
            }
        } else {
            $res = ['respons' => false, 'alert' => 'Ubah status user admin gagal'];
        }
        echo json_encode($res);
    }
}
