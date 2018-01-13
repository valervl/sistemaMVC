<?php

namespace App\Controllers;

use App\Core\Controller;

class loginController extends Controller {

    public function index() {

        $this->loadTemplate('login', $this->getData());
    }

}