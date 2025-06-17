<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //default routes kehalaman login
$routes->get('/', 'AuthController::index');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/admin', 'DashboardController::index', ['filter' => 'rolefilter']);
$routes->get('/guest', 'DashboardController::index', ['filter' => 'rolefilter']);


$routes->get('/produkList', 'kategoriController::index',['filter' => 'rolefilter']);

$routes->group('produk', ['filter' => 'rolefilter'], function ($routes) { 
    $routes->get('', 'ProdukController::index');
    $routes->post('', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
    $routes->get('download', 'ProdukController::download');
});

$routes->group('keranjang', ['filter' => 'rolefilter'], function ($routes) {
    $routes->get('', 'TransaksiController::index');
    $routes->post('', 'TransaksiController::cart_add');
    $routes->post('edit', 'TransaksiController::cart_edit');
    $routes->get('delete/(:any)', 'TransaksiController::cart_delete/$1');
    $routes->get('clear', 'TransaksiController::cart_clear');
});

$routes->get('checkout', 'TransaksiController::checkout', ['filter' => 'rolefilter']);
$routes->post('buy', 'TransaksiController::buy', ['filter' => 'rolefilter']);

$routes->get('get-location', 'TransaksiController::getLocation', ['filter' => 'rolefilter']);
$routes->get('get-cost', 'TransaksiController::getCost', ['filter' => 'rolefilter']);

$routes->get('/datatable', 'DatatableController::index');

