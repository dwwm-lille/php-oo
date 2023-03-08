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

    public function create()
    {
        $book = new Book();
        $book->title = $this->post('title');
        $book->isbn = $this->post('isbn');
        $errors = [];

        if ($this->submit()) {
            if (empty($book->title)) {
                $errors['title'] = 'Le titre est invalide.';
            }

            if (! $book->validIsbn()) {
                $errors['isbn'] = 'ISBN est invalide.';
            }

            if (empty($errors)) {
                $book->save();
            }
        }

        return $this->render('books/create.html.php', [
            'book' => $book,
            'errors' => $errors,
        ]);
    }
}
