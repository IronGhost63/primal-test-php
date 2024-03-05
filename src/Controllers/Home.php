<?php
namespace App\Controllers;

use App\Controller;
use App\Model\ProductsQuery;

class Home extends Controller {
    public function Home() {
        $products = ProductsQuery::create()->orderById('DESC')->limit(500)->find();

        foreach( $products as $product ) {
            $items[] = [
                'id' => $product->getId(),
                'name' => $product->getTitle(),
                'description' => $product->getDescription(),
                'price' => $product->getPrice(),
            ];
        }

        return $this->render('home', [
            'items' => $items,
        ]);
    }
}
