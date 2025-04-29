<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DatatableController extends BaseController
{
    public function index()
    {
        // Data pengguna dan role (hardcoded dulu)
        $users = [
            ['id' => 1, 'username' => 'willy', 'role' => 'admin'],
            ['id' => 2, 'username' => 'wildan', 'role' => 'user'],
            ['id' => 3, 'username' => 'budi', 'role' => 'user'],
            ['id' => 4, 'username' => 'sari', 'role' => 'admin'],
            ['id' => 5, 'username' => 'joni', 'role' => 'user'],
        ];

        // Kirim data ke view
        return view('dataTable', ['users' => $users]);
    }
}
