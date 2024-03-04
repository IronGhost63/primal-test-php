<?php
namespace App;

use duncan3dc\Laravel\BladeInstance;
use Buki\Router\Http\Controller as BaseController;

abstract class Controller extends BaseController {
  protected $blade;

  public function __construct() {
    $this->blade = new BladeInstance( ABSPATH . 'src/Views', ABSPATH . 'cache/templates');
  }

  protected function render( string $template, array $params ) {
    return $this->blade->render( $template, $params );
  }
}
