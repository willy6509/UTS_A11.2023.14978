<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        // Ambil data sesi user
        $username = session()->get('username');
        $role = session()->get('role');
    
        if (!$username || !$role) {
            return redirect()->to('/login');
        }

        $currentPath = service('uri')->getSegment(1);

        if ($role === 'admin' && $currentPath !== 'admin') {
            return redirect()->to('/admin');
        }
        if ($role === 'guest' && $currentPath !== 'guest') {
            return redirect()->to('/guest');
        }

        

        // Data khusus berdasarkan role
        if ($role === 'admin') {
            $data = [
                'username' => $username,
                'role' => $role,
                'message' => 'Semangat untuk hari ini',
                'adminData' => [
                    'total_users' => 42,
                    'last_login' => '2025-04-29 10:00:00'
                ]
            ];
        } elseif ($role === 'guest') {
            $data = [
                'username' => $username,
                'role' => $role,
                'message' => 'Selamat melihat-lihat produk kami',
                'userData' => [
                    'favorite_furniture' => 3,
                    'membership_status' => 'Aktif'
                ]
            ];
        } else {
            return redirect()->to('/login');
        }

        return view('dashboard', $data);
    }
}
