<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KategoriController extends BaseController
{
    private $kategori = [
        1 => 'Meja',
        2 => 'Kursi',
        3 => 'Lemari',
        4 => 'Sofa',
        5 => 'Rak'
    ];

    private $produk = [
        1 => ['Meja Makan', 'Meja Kantor', 'Meja Belajar'],  
        2 => ['Kursi Santai', 'Kursi Kantor', 'Kursi Lipat'], 
        3 => ['Lemari Pakaian', 'Lemari Buku', 'Lemari Penyimpanan'], 
        4 => ['Rak Dinding', 'Rak Buku', 'Rak Sepatu'],       
        5 => ['Sofa Minimalis', 'Sofa Bed', 'Sofa Lantai'] 
    ];
    public function index()
    {
        return view('kategori', ['kategori' => $this->kategori]);
    }

    public function produk($id)
    {
        if (!isset($this->kategori[$id])) {
            return "Kategori tidak ditemukan!";
        }
        return view('produk', [
            'kategori' => $this->kategori[$id],
            'produk' => $this->produk[$id]
        ]);
    }
}
