<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Book;

class BookController extends Controller
{
    public function index()
    {
        return $this->render('books/index.html.php', [
            'books' => Book::all(),
        ]);
    }
}
