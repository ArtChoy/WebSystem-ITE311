<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Main pages routes
$routes->get('/', 'Home::index');          // Homepage route
$routes->get('/home', 'Home::index');      // Alternative homepage route
$routes->get('/about', 'Home::about');     // About page route
$routes->get('/contact', 'Home::contact'); // Contact page route
