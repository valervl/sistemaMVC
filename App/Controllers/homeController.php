<?php

namespace App\Controllers;

use App\Core\Controller;

class homeController extends Controller {

    public function index() {

        $this->loadTemplate('home', $this->getData());
    }

    public function sobre(){

    	$this->loadTemplate('sobre', $this->getData());
    }

    
}



