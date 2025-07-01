<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');

$routes->group('catalog', function ($routes) {
    $routes->get('(:segment)', 'CatalogController::index/$1');
});
$routes->group('reviews', function ($routes) {
    $routes->get('/', 'ReviewsController::index');
});

$routes->group('config', function($routes){
    $routes->get('/', 'ConfigController::index');
    $routes->post('/', 'ConfigController::store');
    $routes->post('session', 'ConfigController::saveConfig');
    $routes->get('session', 'ConfigController::getConfig');
    $routes->get('selected-products', 'ConfigController::getConfigProducts');

    $routes->group('products', function($routes){
        $routes->get('(:segment)', 'ProductController::index/$1');
        $routes->post('(:segment)', 'ProductController::store/$1');
    });

    $routes->group('category', function($routes){
        $routes->get('(:num)/filters/', 'ConfigController::filters/$1');
    });
});