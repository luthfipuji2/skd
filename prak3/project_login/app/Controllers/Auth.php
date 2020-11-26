<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\AuthModel;


class Auth extends Controller
{
    public function register()
    {   //masuk validasi sesuai dtbase
        $val = $this->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'nomor_hp' => 'required',
                'alamat' => 'required',
            ]
        );
        //validasi berhasil redirect ke halaman register
        var_dump($val);
        if (!$val) {
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with(
                'validate',
                $pesanvalidasi
            );
        }

        //proses enkripsi, ngambil password dari database
        //proses dekrip (halaman regis) jadi enkrip(database)
        $kalimat = $this->request->getPost('password');
        $key = 1 ; //NIM kaliann
        for ($i = 0; $i < strlen($kalimat); $i++) {
             $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
             $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
             $c[$i] = chr($b[$i]); //rubah desimal ke ASCII, desimal diubah ke huruf
            }
                    
        for ($i = 0; $i < strlen($kalimat); $i++) {
            echo $kalimat[$i];
        }
        $hsl = '';
        for ($i = 0; $i < strlen($kalimat); $i++) {
            echo $c[$i];
            $hsl = $hsl . $c[$i];
        }
        //hasil proses enkripsi 
        $password = $hsl;

        //request ke database, jika berhasil nampilin session terus redirect ke login
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => $hsl,
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'alamat' => $this->request->getPost('alamat'),
            'role' => $this->request->getPost('role')
        );
        $model = new UserModel();
        $model->insert($data);
        session()->setFlashdata('pesan', 'selamat anda berhasil registrasi');
        return redirect()->to('/');
    }

    public function login()
    {
        //cek di database pake Authmodel mengggunakan variabel $model
        $model = new AuthModel();
        $table = 'users';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($username, $table);

        //kalo data kosong nampilin session user salah
        if ($row == NULL) {

            session()->setFlashdata('pesan', 'username anda salah');
            return redirect()->to('/');
        }

        $isi=$row->password;//enkripsi sesuai password didtabase
        $hsl = '';
        $key = 1; //nim terakhir
            for($i=0;$i<strlen($isi);$i++)
            {
                    $kode[$i]=ord($isi[$i]); // rubah ASII ke desimal
                    $b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
                    $c[$i]=chr($b[$i]); //rubah desimal ke ASCII-nilai desimal diubah ke huruf
                    $hsl = $hsl . $c[$i];
                }

        //pengecekan var $pass (database) $hsl (hasil dekrip)
         if ($password==$hsl) {
            $data = array(
                'log' => TRUE,
                'username' => $row->username,
                'role' => $row->role,
            );
            session()->set($data);
            session()->setFlashdata('pesan', 'Berhasil login');
            return redirect()->to('/backend');
        }
            else{
                session()->setFlashdata('pesan', 'Password Salah');
            return redirect()->to('/');
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
