<?php

namespace App\Controllers;

class HomeController {
    public function index() :void{
        require __DIR__.'/../views/pages/login.php';
    }
}