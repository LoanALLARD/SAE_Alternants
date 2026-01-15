<?php

namespace App\Core;

class Router {
    /** * On précise que la clé est l'URL (string) et la valeur est un tableau
     * contenant obligatoirement les clés 'controller' et 'action'.
     * @var array<string, array{controller: string, action: string}>
     */
    protected array $routes = [];

    public function addRoute(string $url, string $controller, string $action): void {
        $this->routes[$url] = ['controller' => $controller, 'action' => $action];
    }

    public function run(string $uri): void {
        // Nettoyage de l'URL
        $parts = strtok($uri, '?');

        // On force le type string pour la sécurité.
        $cleanUri = ($parts !== false) ? $parts : '/';

        if (array_key_exists($cleanUri, $this->routes)) {
            $controllerName = "App\\Controllers\\" . $this->routes[$cleanUri]['controller'];
            $action = $this->routes[$cleanUri]['action'];

            if (class_exists($controllerName)) {
                $controller = new $controllerName();

                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    $this->sendError404("Action $action non trouvée");
                }
            } else {
                $this->sendError404("Contrôleur $controllerName non trouvé");
            }
        } else {
            $this->sendError404();
        }
    }

    private function sendError404(string $message = "404 - Page non trouvée"): void {
        http_response_code(404);
        // Inclure la vue 404 personnalisée
        require __DIR__ . '/../views/pages/404.php';
    }
}