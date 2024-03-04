<?php
namespace App;

use Buki\Router\Router;

require __DIR__ . '/../vendor/autoload.php';

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/../' );
}

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
