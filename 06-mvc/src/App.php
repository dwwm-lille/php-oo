<?php

namespace M2i\Mvc;

use M2i\Mvc\Controller\MovieController;

class App
{
    /**
     * Permet de lancer l'application et de lancer le bon contrôleur
     * en fonction de la route / page actuelle.
     */
    public function run(): void
    {
        $controller = new MovieController();
        $controller->index();
    }
}
