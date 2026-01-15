<?php

namespace App\Core;

class Router {
    protected array $routes = [];

    public function addRoute(string $url, string $controller, string $action): void {
        $this->routes[$url] = ['controller' => $controller, 'action' => $action];
    }

    public function run(string $uri): void {
        // Nettoyage de l'URL
        $uri = strtok($uri, '?');

        if (array_key_exists($uri, $this->routes)) {
            $controllerName = "App\\Controllers\\" . $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];

            $controller = new $controllerName();
            $controller->$action();
        } else {
            http_response_code(404);
            echo "404 - Page non trouvée";
        }
    }
}