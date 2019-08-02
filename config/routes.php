<?php
$router->use('GET', '/auth/register', new App\Controllers\AuthController(), 'register_view');
$router->use('POST', '/auth/register', new App\Controllers\AuthController(), 'register');

$router->use('GET', '/auth/login', new App\Controllers\AuthController(), 'login_view');
$router->use('POST', '/auth/login', new App\Controllers\AuthController(), 'login');

$router->use('GET', '/errors/404', new App\Controllers\ErrorsController(), 'error_404');

