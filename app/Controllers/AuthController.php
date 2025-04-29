<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        return view('login.php');
    }
    function __construct()
{
    helper('form');
}

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
    
            $dataUser = [
                [
                    'id' => 'U02',
                    'username' => 'willy',
                    'password' => password_hash('admin123', PASSWORD_DEFAULT),
                    'role'     => 'admin'
                ],
                [
                    'id' => 'A01',
                    'username' => 'wildan',
                    'password' => password_hash('user123', PASSWORD_DEFAULT),
                    'role'     => 'user'
                ]
            ];
            foreach ($dataUser as $user) {
                if ($username == $user['username']) {
                    if (password_verify($password, $user['password'])) {
                        session()->set([
                            'id' => $user['id'],
                            'username' => $user['username'],
                            'role' => $user['role'],
                            'isLoggedIn' => TRUE
                        ]);
                        if ($user['role'] === 'admin') {
                            return redirect()->to(base_url('/admin'));

                        } elseif ($user['role'] === 'user') {
                            return redirect()->to(base_url('/user'));

                        }
                    } else {
                        session()->setFlashdata('failed', 'Password salah');
                        return redirect()->back();
                    }
                }
            }
    
            session()->setFlashdata('failed', 'Username tidak ditemukan');
            return redirect()->back();
    
        } else {
            return view('login.php');
        }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
