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

    public function show($id)
    {
        $movie = Movie::find($id);

        if (! $movie) {
            http_response_code(404);
            return $this->render('404.html.php');
        }

        return $this->render('movies/show.html.php', [
            'movie' => $movie,
        ]);
    }
}
