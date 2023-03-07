<?php

namespace M2i\Mvc;

use M2i\Mvc\Controller\MovieController;

class App extends \AltoRouter
{
    /**
     * Permet de lancer l'application et de lancer le bon contrôleur
     * en fonction de la route / page actuelle.
     */
    public function run(): void
    {
        // Pour avoir les erreurs "propres"
        $whoops = new \Whoops\Run();
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
        $whoops->register();

        // Lancement du contrôleur
        // $controller = new MovieController();
        // $controller->index();

        // Traiter la requête avec AltoRouter
        $match = $this->match();

        if ($match) {
            // MovieController@index
            [$controller, $method] = explode('@', $match['target']); // ['MovieController', 'index']
            $controller = '\\M2i\\Mvc\\Controller\\'.$controller;
            $controller = new $controller(); // new \M2i\Mvc\Controller\MovieController();
            $controller->$method(...$match['params']); // $controller->index();
        } else {
            http_response_code(404);
            require __DIR__.'/../templates/404.html.php';
        }
    }
}
