<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//////////////////////////////////
/////////// home

$routes->get('home', 'Dashboard::index');
////////////////////////////////////
////////login

$routes->get('login', 'login::index');
$routes->get('login_auth', 'Login::auth');
///////////////////////////////////
//////resgister
$routes->get('sign-form', 'Register::index');
//////////////////////////////////
/////////// users
$routes->get('users-list', 'Users::index');
$routes->get('users-create', 'Users::create');
$routes->post('users-insert', 'Users::insert');
$routes->get('sign-form', 'Users::index');
$routes->get('users-delete/(:num)', 'Users::delete/$1');
//////////////////////////////////
/////////// roles
$routes->get('roles-list', 'Roles::index');
$routes->get('roles-create', 'Roles::create');
$routes->post('roles-insert', 'Roles::insert');
$routes->get('roles-edit/(:num)', 'Roles::edit/$1');
$routes->post('roles-update', 'Roles::update');
$routes->get('roles-delete/(:num)', 'Roles::delete/$1');
//////////////////////////////////
/////////// Police station
$routes->get('polistation-list', 'Policebranch::index');
$routes->get('polistation-create', 'Policebranch::create');
$routes->post('polistation-insert', 'Policebranch::insert');
$routes->get('polistation-delete/(:num)', 'Policebranch::delete/$1');
/////////////////////////////////
/////////// categories
$routes->get('cats-list', 'Categories::index');
$routes->get('cats-create', 'Categories::create');
$routes->post('cats-insert', 'Categories::insert');
$routes->get('cats-edit/(:num)', 'Categories::edit/$1');
$routes->post('cats-update', 'Categories::update');
$routes->get('cats-delete/(:num)', 'Categories::delete/$1');
//////////////////////////////////
/////////// reports
$routes->get('reports-list', 'Reports::index');
$routes->get('reports-create', 'Reports::create');





