<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return $this->render('movies/index.html.php', [
            'movies' => $movies,
            'name' => 'Fiorella',
        ]);
    }
}
