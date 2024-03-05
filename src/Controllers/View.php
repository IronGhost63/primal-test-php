<?php
namespace App\Controllers;

use App\Controller;
use App\Model\ProductsQuery;

class View extends Controller {
    public function View(int $id) {
        $products = ProductsQuery::create()->findById( $id );
        $item = $products->getFirst();

        return $this->render( 'view', [
            'name' => $item->getTitle(),
            'description' => $item->getDescription(),
            'price' => $item->getPrice(),
        ] );
    }
}
