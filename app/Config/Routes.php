<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('create', 'Home::create');
$routes->get('read/(:segment)', 'Home::read/$1');
$routes->get('update/(:segment)', 'Home::update/$1');
$routes->post('update-action', 'Home::updateAction');
$routes->get('delete/(:segment)', 'Home::delete/$1');
