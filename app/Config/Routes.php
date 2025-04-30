<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');

$routes->get('/catalog', 'CatalogController::index');

$routes->group('/config', function($routes){
    $routes->get('/', 'ConfigController::index');

    $routes->group('products', function($routes){
        $routes->get('(:segment)', 'ProductController::index/$1');
    });
});