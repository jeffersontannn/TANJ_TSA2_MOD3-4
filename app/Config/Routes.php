<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/tasks', 'Tasks::tasks');
$routes->get('/profile', 'Tasks::profile');
$routes->get('/about', 'Tasks::about');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/tasks/new', 'Tasks::new', ['filter' => 'auth']);
$routes->post('/tasks/create', 'Tasks::create', ['filter' => 'auth']);

$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1', ['filter' => 'auth']);
$routes->post('/tasks/update/(:num)', 'Tasks::update/$1', ['filter' => 'auth']);

$routes->post('/tasks/delete/(:num)', 'Tasks::delete/$1', ['filter' => 'auth']);