<?php
namespace App\Controller;

use Particle\Validator\Validator;
use App\Controller;
use App\Model\Products;

class Create extends Controller {
    public function Create() {
        return $this->render('create', []);
    }

    public function Save() {
        $validator = new Validator();

        $validator->required('product.name')->string();
        $validator->required('product.description')->string();
        $validator->required('product.price')->digits();

        $name = filter_input( INPUT_POST, 'product_name', FILTER_DEFAULT );
        $description = filter_input( INPUT_POST, 'product_description', FILTER_DEFAULT);
        $price = filter_input( INPUT_POST, 'product_price', FILTER_DEFAULT );

        $result = $validator->validate([
            'product' => [
                'name' => $name,
                'description' => $description,
                'price' => $price,
            ],
        ]);

        if ( $result->isValid() ) {
            try {
                $product = new Products();

                $product->setTitle( $name );
                $product->setDescription( $description );
                $product->setPrice( $price );

                $product->save();
            } catch (\Throwable $e) {
                die( $e->getMessage() );
            }

            $data = [
                'success' => true,
                'message' => 'New item has been created',
            ];
        } else {
            $data = [
                'success' => false,
                'message' => 'Error',
                'error' => $result->getMessages(),
            ];
        }

        return $this->render('saved', $data);
    }
}
