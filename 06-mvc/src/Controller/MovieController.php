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

    public function create()
    {
        $movie = new Movie();
        $movie->title = 'Un nouveau film';
        $movie->released_at = '2023-03-07';
        $movie->description = 'Description';
        $movie->duration = 150;
        $movie->cover = 'new.jpg';
        $movie->id_category = 1;
        $movie->save();

        // @todo Formulaire
    }
}
