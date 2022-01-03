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
$routes->get('/', 'Login::index');

$routes->add('/admin', 'Admin\Dashboard::Index',['filter' => 'auth']);

// Administrator Employees Routes (GET)
$routes->get('/admin/employees', 'Admin\Employees::Index',['filter' => 'auth']);
$routes->get('/admin/employees/(:num)', 'Admin\Employees::Index/$1',['filter' => 'auth']);
$routes->get('/admin/employees/add', 'Admin\Employees::AddEmployee',['filter' => 'auth']);
$routes->get('/admin/employees/edit/(:num)', 'Admin\Employees::EditEmployee/$1',['filter' => 'auth']);
$routes->get('/admin/employees/enable/(:num)', 'Admin\Employees::EnableEmployee/$1',['filter' => 'auth']);
$routes->get('/admin/employees/disable/(:num)', 'Admin\Employees::DisableEmployee/$1',['filter' => 'auth']);

// Administrator Employees Routes (POST)
$routes->post('/admin/employees/add', 'Admin\Employees::InsertEmployee',['filter' => 'auth']);
$routes->post('/admin/employees/edit/(:num)', 'Admin\Employees::UpdateEmployee/$1',['filter' => 'auth']);

// Administrator Leads Routes (GET) 
$routes->get('/admin/leads', 'Admin\Leads::Index',['filter' => 'auth']);
$routes->get('/admin/leads/add', 'Admin\Leads::AddLead',['filter' => 'auth']);

// Administrator Leads Routes (POST) 
$routes->post('/admin/leads/add', 'Admin\Leads::InsertLead',['filter' => 'auth']);

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
