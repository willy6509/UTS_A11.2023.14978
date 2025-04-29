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
$routes->get('/user', 'DashboardController::index', ['filter' => 'rolefilter']);


$routes->get('/kategori', 'kategoriController::index');
$routes->get('/kategori/(:num)', 'KategoriController::produk/$1');

$routes->get('/datatable', 'DatatableController::index');

