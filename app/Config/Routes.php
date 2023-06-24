<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Router User
$routes->get('/', 'UserController::index');
$routes->get('/articles', 'UserController::articles');
$routes->get('/articles/(:any)/comments', 'UserController::comments');
$routes->get('/articles/comments', 'UserController::comments');
$routes->post('/articles/comments/store', 'Comments::store');
$routes->get('/articles/(:segment)', 'UserController::page/$1');

// Router Dashboard
$routes->get('/admin/', 'Admin::index');
$routes->get('/admin/dashboard', 'Admin::index');

// Router Manage Articles
$routes->get('/admin/manage_articles', 'Articles::manageArticles');
$routes->get('/admin/manage_articles/create', 'Articles::create');
$routes->delete('/articles/(:num)', 'Articles::delete/$1');

// Router Manage Comments
$routes->get('/admin/manage_comments', 'Comments::manageComments');
$routes->delete('/comments/(:num)', 'Comments::delete/$1');

// Router Manage Reports
$routes->get('/admin/manage_reports', 'Admin::manageReports');
$routes->get('/admin/manage_reports', 'Admin::countByCategory');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
