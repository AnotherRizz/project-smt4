<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/login', 'Auth::index');
$routes->get('/auth', 'Auth::index');
$routes->get('/auth/registrasi', 'Auth::registrasi');
$routes->post('auth/daftar', 'Auth::daftar');
$routes->post('auth/login', 'Auth::login');
$routes->get('/pesan/voli', 'Pesan::voli');
$routes->add('/admin', 'Admin::index');
$routes->post('admin/tambah', 'Admin::tambah');
$routes->get('admin/ubah/(:num)', 'Admin::ubah/$1');
$routes->post('admin/delete/(:num)', 'Admin::delete/$1');
$routes->post('admin/update', 'Admin::update');
