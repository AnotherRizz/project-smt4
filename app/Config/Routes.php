<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('/admin', 'Admin::index');
$routes->post('admin/tambah', 'Admin::tambah');
$routes->get('admin/ubah/(:num)', 'Admin::ubah/$1');
$routes->post('admin/delete/(:num)', 'Admin::delete/$1');
$routes->post('admin/update', 'Admin::update');
