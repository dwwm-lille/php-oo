<?php

namespace M2i\Mvc;

use M2i\Mvc\Controller\MovieController;

class App
{
    public function run()
    {
        $controller = new MovieController();
        $controller->index();
    }
}
