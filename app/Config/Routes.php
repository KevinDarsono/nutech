<?php

use App\Controllers\AppController;
use App\Controllers\Authentication\LoginController;
use App\Controllers\Authentication\RegistrationController;
use App\Controllers\ControllerRegistration;
use App\Controllers\Master\AkunController;
use App\Controllers\Master\TopUpController;
use App\Controllers\Master\TransactionController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('registration', [RegistrationController::class, "index"]);
$routes->get("/login", [LoginController::class, "index"]);

$routes->get("/dashboard", [AppController::class, "dashboard"]);
$routes->get("/layouts", function() {
    return view("authentication/layouts/main");
});

$routes->group("topup", function($routes) {
    $routes->get("", [TopUpController::class, "index"]);
});

$routes->group("transaction", function($routes) {
    $routes->get("", [TransactionController::class, "index"]);
});

$routes->group("akun", function($routes) {
    $routes->get("", [AkunController::class, "index"]);
    $routes->get("edit", [AkunController::class, "edit"]);
});