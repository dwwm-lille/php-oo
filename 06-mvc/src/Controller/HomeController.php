<?php

namespace M2i\Mvc\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render('home.html.php', [
            'firstname' => 'Toto',
        ]);
    }
}
