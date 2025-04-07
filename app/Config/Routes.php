<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');
$routes->get('/home', 'TestController::testConnections');

$routes->get('/7b2c6e04fe9dbd399e6a1f2c83d85c5fda5a3de5', 'ModerateController::index');

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

$routes->group('assemblies', ['namespace' => 'App\Controllers'], function($routes) {

});

$routes->group('reviews', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'ReviewsController::index');
    $routes->post('create', 'ReviewsController::store');
    $routes->post('approve/(:num)', 'ModerateController::approve/$1');
    $routes->post('reject/(:num)', 'ModerateController::reject/$1');
});

$routes->group('catalog', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('(:segment)', 'CatalogController::index/$1', ['filter' => 'catalogTypeFilter']);
    $routes->post('/toCart/(:num)', 'CatalogController::toCart/$1');
});

$routes->group('configurator', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->post('clear', 'ConfiguratorController::clear');
    $routes->get('/', 'ConfiguratorController::index');
    //Отображение готовой сборки в конфигураторе
    $routes->get('(:num)', 'ConfiguratorController::show/$1');
    //Добавление товара в сборку принимает sku products
    $routes->post('add/(:num)', 'ConfiguratorController::add/$1');
    //Поиск товаров по id категории, для добавления в сборку
    $routes->get('products/(:num)', 'ConfiguratorController::showProductsByCategory/$1');
});