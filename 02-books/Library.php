<?php

class Library
{
    private $books = [];

    public function addBook(Book $book)
    {
        $this->books[] = $book;

        return $this;
    }

    public function addBooks($books)
    {
        // $this->books = array_merge($this->books, $books);
        $this->books = [...$this->books, ...$books]; // PHP 7.4+

        // 3ème solution
        // foreach ($books as $book) {
        //     $this->addBook($book);
        // }

        return $this;
    }

    /**
     * @return array<Book>
     */
    public function books()
    {
        return $this->books;
    }

    public function count()
    {
        return count($this->books);
    }

    public function totalPages()
    {
        $total = 0;

        foreach ($this->books() as $book) {
            $total += $book->countPages();
        }

        return $total;
    }

    public function getBook($title)
    {
        foreach ($this->books() as $book) {
            if (strtolower($book->getTitle()) === strtolower($title)) {
                return $book;
            }
        }
    }

    public function findBooksByLetter($letter)
    {
        // Le use dans le callback nous permet d'accéder à une variable externe
        return array_filter($this->books(), function (Book $book) use ($letter) {
            return substr($book->getTitle(), 0, 1) === $letter;
        });
    }

    public function randomBook()
    {
        if (empty($this->books)) {
            return null;
        }

        // array_rand renvoie un index aléatoire
        return $this->books[array_rand($this->books)];
    }
}
