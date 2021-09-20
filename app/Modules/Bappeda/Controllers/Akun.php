<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\UserAdminModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Akun extends BaseController
{
    private $m_user;
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->m_user = new UserAdminModel();
    }

    // AKUN LOGIN ==========================================================

    public function index()
    {
        $this->v_data['active'] = '0';
        $this->v_data['akun'] = $this->m_user->getData(session('id_user'));

        return views('content/akun/akun', 'Bappeda', $this->v_data);
    }

    public function saveAkun()
    {
        $post = $this->request->getPost();

        if ($post) {
            $oldPass = $this->m_user->getData(session('id_user'))->password;

            if ($oldPass == md5($post['pass_old'])) {
                $data = array(
                    'id_user'   => session('id_user'),
                    'username'  => $post['username'],
                    'password'  => md5($post['pass_new']),
                );
                $simpanUser = $this->m_user->save($data);

                if ($simpanUser) {
                    alert_success('Data berhasil disimpan.');
                    return redirect()->to(base_url('bappeda/akun'));
                } else {
                    alert_failed('Data gagal disimpan.');
                    return redirect()->to(base_url('bappeda/akun'));
                }
            } else {
                alert_failed('Data gagal disimpan. Password lama tidak sesuai');
                return redirect()->to(base_url('bappeda/akun'));
            }
        } else {
            throw PageNotFoundException::forPageNotFound();
        }
    }
}
