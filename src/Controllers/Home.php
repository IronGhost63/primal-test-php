<?php
namespace App\Controllers;

use App\Controller;

class Home extends Controller {
    public function Home() {
        return $this->render('home', []);
    }
}
