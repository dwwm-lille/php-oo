<?php

namespace M2i\Mvc\Controller;

abstract class Controller
{
    public function render($template, $data = [])
    {
        foreach ($data as $variable => $value) {
            // $movies = [];
            // $name = 'Fiorella';
            ${$variable} = $value;
        }

        require __DIR__.'/../../templates/'.$template;
    }
}
