<?php
namespace App\Controllers;

use App\Controller;
use App\Model\Products;

class Home extends Controller {
    public function Home() {
        return $this->render('home', []);
    }
}
