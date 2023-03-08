<?php

namespace M2i\Mvc\Controller;

abstract class Controller
{
    /**
     * Permet d'afficher une vue avec des données
     */
    public function render(string $template, array $data = []): void
    {
        foreach ($data as $variable => $value) {
            // $movies = [];
            // $name = 'Fiorella';
            ${$variable} = $value;
        }

        require __DIR__.'/../../templates/'.$template;
    }

    /**
     * Permet d'afficher une 404
     */
    public function render404()
    {
        http_response_code(404);

        return $this->render('404.html.php');
    }
}
