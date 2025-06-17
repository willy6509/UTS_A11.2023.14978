<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ProductModel; 

class KategoriController extends BaseController
{
    protected $product;

    function __construct(){
        $this -> product = new ProductModel();
        helper('form');
        helper('number');
    }
    
    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        
        return view('produkList', $data);
    }
}
