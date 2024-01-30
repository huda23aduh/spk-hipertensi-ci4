<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/spk', 'Spk::index');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::process');
$routes->get('/logout', 'Logout::index');

