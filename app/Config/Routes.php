<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::signin'); // Página por defecto
$routes->get('signup', 'Home::signup');
$routes->get('signin', 'Home::signin');
//$routes->get('privacidad', 'Nosotros::privacidad');
//$routes->get('condiciones', 'Nosotros::condiciones');
$routes->get('settings', 'Tutores::settings');
//$routes->get('close', 'User::cerrar_sesion');
$routes->setAutoRoute(true);