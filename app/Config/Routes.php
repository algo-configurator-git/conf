<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');

$routes->group('catalog', function ($routes) {
    $routes->get('/', 'CatalogController::index');
});
$routes->group('reviews', function ($routes) {
    $routes->get('/', 'ReviewController::index');
});

$routes->group('config', function($routes){
    $routes->get('/', 'ConfigController::index');
    $routes->post('/', 'ConfigController::store');
    $routes->get('/selected-products', 'ConfigController::getConfigProducts');

    $routes->group('products', function($routes){
        $routes->get('(:segment)', 'ProductController::index/$1');
        $routes->post('(:segment)', 'ProductController::store/$1');
    });
});