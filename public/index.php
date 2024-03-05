<?php
namespace App;

use Buki\Router\Router;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/config.php';

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
      'controllers' => 'src/Controllers',
    ],
    'namespaces' => [
      'controllers' => 'App\Controllers',
    ],
]);

$router->get( '/', 'Home@Home' );
$router->get( '/create', 'Create@Create' );
$router->post( '/create', 'Create@Save' );
$router->get( '/view/:id', 'View@View' );

$router->run();
