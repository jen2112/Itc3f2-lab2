<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/PlayTrace', 'MainController::songs');
$routes->post('/save', 'MainController::save');
$routes->post('/insert', 'MainController::insert');
$routes->get('/search', 'MainController::search');