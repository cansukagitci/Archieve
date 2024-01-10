<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get("/","VinylController::showdata");
//$routes->post("/","VinylController::showdata");
$routes->post("/","VinylController::add_vinyl");
//$routes->get("/Home","VinylController::add_vinyl");
$routes->get('/', 'Home::index');
$routes->get('/Home', 'VinylController::index');
$routes->post("/","VinylController::delete");
$routes->post("/","VinylController::update");
$routes->post("/","VinylController::addlink");
$routes->get("/Game", "GameController::index");
$routes->post("/", "GameController::add_game");
$routes->get("/","GameController::showgamedata");
//$routes->post("/","GameController::showgamedata");
$routes->post("/","GameController::update");
$routes->post("/","GameController::delete");
