<?php

use Symfony\Component\Routing;
use Product\Controller\ProductsController;
use Symfony\Component\Routing\Route;

$routes = new Routing\RouteCollection();

$routes->add('list', new Route('/list', [
    '_controller' => [ProductsController::class, 'list'],
]));

$routes->add('show', new Route('/products/{id}', [
    '_controller' => [ProductsController::class, 'show'],
]));

return $routes;