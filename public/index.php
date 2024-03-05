<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/config.php';

use Buki\Router\Router;

// Return actual resource (for cli-server)
if ( php_sapi_name() === 'cli-server' && preg_match('/\.(?:png|jpg|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/../' );
}

// Routing
$router = new Router([
    'paths' => [
        'controllers' => ABSPATH . './src/Controller',
    ],
    'namespaces' => [
        'controllers' => 'App\\Controller',
    ],
    'debug' => false,
]);

$router->get( '/', 'Home@Home' );
$router->get( '/create', 'Create@Create' );
$router->post( '/create', 'Create@Save' );
$router->get( '/view/:id', 'View@View' );

$router->run();
