<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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



$routes->get('/', 'Home::index');
// CRUD Routes
$routes->get('add', 'AuthController::create');
$routes->get('all', 'AuthController::findAll');
$routes->get('find/(:num)', 'AuthController::find/$1');
$routes->get('update/(:num)', 'AuthController::update/$1');
$routes->get('delete/(:num)', 'AuthController::delete/$1');

// Admin
$routes->get('admin/(:any)', 'AdminController::pages/$1');



if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
