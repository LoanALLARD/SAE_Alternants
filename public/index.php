<?php

// Chargement de l'autoloader
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

// Initialisation du Router
$router = new Router();

// Définition des routes
$router->addRoute('/', 'HomeController', 'index');

// Exécution
$router->run($_SERVER['REQUEST_URI']);