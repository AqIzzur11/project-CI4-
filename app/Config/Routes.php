<?php

use CodeIgniter\Router\RouteCollection;

// $routes->get('/', 'Home::index');
// $routes->get('/hello', 'Hello::index');
// $routes->get('/presensi', 'Presensi::absen');

/** @var RouteCollection $routes */
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
// dd('coba');
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');
$routes->group('category', static function ($routes) {
    $routes->get('/', 'Category::index');
    $routes->get('create', 'Category::create');
    $routes->post('store', 'Category::store');
    $routes->get('edit/(:num)', 'Category::edit/$1');
    $routes->post('update', 'Category::update');
    $routes->get('delete/(:num)', 'Category::delete/$1');
});