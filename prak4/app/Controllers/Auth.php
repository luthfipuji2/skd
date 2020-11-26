<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\AuthModel;


class Auth extends Controller
{
    public function register()
    {
        $val = $this->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );
        var_dump($val);
        if (!$val) {
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with(
                'validate',
                $pesanvalidasi
            );
        }

        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'role' => $this->request->getPost('role')
        );
        $model = new UserModel();
        $model->insert($data);
        session()->setFlashdata('pesan', 'selamat anda berhasil registrasi');
        return redirect()->to('/');
    }

    public function login()
    {
        $model = new AuthModel();
        $table = 'users';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $row = $model->get_data_login($username, $table);
        if ($row == NULL) {

            session()->setFlashdata('pesan', 'username anda salah');
            return redirect()->to('/');
        }

        if (condition) {
            # code...
        } else {
            # code...
        }
        

        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'username' => $row->username,
                'role' => $row->role,
            );
            session()->set($data);
            session()->setFlashdata('pesan', 'Berhasil login');
            return redirect()->to('/backend');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'Berhasil logout');
        return redirect()->to('/');
    }
}
