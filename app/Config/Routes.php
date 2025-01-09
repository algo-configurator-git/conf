<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ConstructorController::index');
$routes->get('/home', 'Home::index');
$routes->get('/test', 'ConstructorController::test');

$routes->group('collections', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'CollectionController::index');
    $routes->get('create', 'CollectionController::create');
    $routes->post('create', 'CollectionController::store');
    $routes->get('(:num)', 'CollectionController::show/$1');
    $routes->get('edit/(:num)', 'CollectionController::edit/$1');
    $routes->post('edit/(:num)', 'CollectionController::edit/$1');
    $routes->get('delete/(:num)', 'CollectionController::delete/$1');

    $routes->group('items', ['namespace' => 'App\Controllers'], function($routes) {
        $routes->get('create', 'CollectionItemsController::create');
        $routes->post('create', 'CollectionItemsController::store');
        $routes->get('(:num)', 'CollectionItemsController::show/$1');
        $routes->get('edit/(:num)', 'CollectionItemsController::edit/$1');
        $routes->post('edit/(:num)', 'CollectionItemsController::edit/$1');
        $routes->get('delete/(:num)', 'CollectionItemsController::delete/$1');
    });
});