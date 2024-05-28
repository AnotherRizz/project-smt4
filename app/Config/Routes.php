<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/profile', 'Home::profile');
$routes->get('home/getOrderDetails/(:num)', 'Home::getOrderDetails/$1');
$routes->get('/auth/login', 'Auth::index');
$routes->get('/home/logout', 'Home::logout');
$routes->get('/auth', 'Auth::index');
$routes->get('/auth/registrasi', 'Auth::registrasi');
$routes->post('auth/daftar', 'Auth::daftar');
$routes->post('auth/login', 'Auth::login');
$routes->get('/pesan/voli/(:num)', 'Pesan::voli/$1');
$routes->post('/pesan/order/(:num)', 'Pesan::order/$1');

$routes->add('/admin', 'Admin::index');
$routes->get('/admin/data', 'Admin::data');
$routes->get('/admin/user', 'Admin::user');
$routes->get('/admin/order', 'Admin::order');
$routes->post('admin/tambah', 'Admin::tambah');
$routes->get('admin/ubah/(:num)', 'Admin::ubah/$1');
$routes->post('admin/status/(:num)', 'Admin::status/$1');
$routes->post('admin/delete/(:num)', 'Admin::delete/$1');
$routes->post('admin/update', 'Admin::update');
$routes->get('/admin/logout', 'Admin::logout');

$routes->post('event/tambah', 'Event::tambah');
$routes->post('event/delete/(:num)', 'Event::delete/$1');
$routes->get('event/ubah/(:num)', 'Event::ubah/$1');
$routes->post('event/update', 'Event::update');

