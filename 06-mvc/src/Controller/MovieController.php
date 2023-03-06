<?php

namespace M2i\Mvc\Controller;

class MovieController extends Controller
{
    public function index()
    {
        $movies = ['Scarface', 'Le Roi Lion'];

        return $this->render('movies/index.html.php', [
            'movies' => $movies,
            'name' => 'Fiorella',
        ]);
    }
}
