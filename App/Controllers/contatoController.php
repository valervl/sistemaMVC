<?php

namespace App\Controllers;

use App\Core\Controller;

class contatoController extends Controller
{
	
	public function index() {

        $this->loadTemplate('contato', $this->getData());
    }
}