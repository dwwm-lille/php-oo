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

    public function show($id)
    {
        $book = Book::find($id);

        if (! $book) {
            return $this->render404();
        }

        return $this->render('books/show.html.php', [
            'book' => Book::find($id),
        ]);
    }
}
