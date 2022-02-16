<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('login', 'Auth::login');

$routes->get('/', 'Home::index');
$routes->get('inventaris', 'Inventaris::index');
$routes->get('inventaris/add', 'Inventaris::create');
$routes->get('inventaris/qrcode', 'Inventaris::qrcode');
$routes->get('inventaris/qr', 'Inventaris::qr');
$routes->get('inventaris/(:segment)', 'Inventaris::detail/$1');
$routes->post('inventaris', 'Inventaris::addproses');

$routes->get('inventaris/edit/(:any)', 'Inventaris::edit/$1');
$routes->put('inventaris/(:any)', 'Inventaris::editproses/$1');
$routes->delete('inventaris/(:segment)', 'Inventaris::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
