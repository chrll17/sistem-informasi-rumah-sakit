<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']); // ['as' => 'home'] = kode penamaan route

$routes->get('/pasien', 'Pasien::index', ['as' => 'pasien']); // ['as' => 'pasien'] = kode penamaan route
$routes->get('/pasien/create', 'Pasien::create', ['as' => 'pasien.create']); // ['as' => 'pasien.create'] = kode penamaan route
$routes->post('/pasien/save', 'Pasien::save', ['as' => 'pasien.save']); // ['as' => 'pasien.save'] = kode penamaan route

$routes->get('/dokter', 'Dokter::index', ['as' => 'dokter']); // ['as' => 'dokter'] = kode penamaan route

$routes->get('/resep', 'Resep::index', ['as' => 'resep']); // ['as' => 'resep'] = kode penamaan route