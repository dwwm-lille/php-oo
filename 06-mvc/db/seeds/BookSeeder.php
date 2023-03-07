<?php

use Phinx\Seed\AbstractSeed;

class BookSeeder extends AbstractSeed
{
    public function run(): void
    {
        $books = $this->table('book');
        $books->truncate();
        $books->insert([
            [
                'title' => 'Harry Potter 1',
                'price' => 19,
                'isbn' => 'abc',
                'author' => 'JK Rowling',
                'published_at' => '1997-12-11',
                'image' => '01.jpg',
            ],
            [
                'title' => 'Harry Potter 2',
                'price' => 29,
                'isbn' => 'def',
                'author' => 'JK Rowling',
                'published_at' => '1999-12-11',
                'image' => '02.jpg',
            ],
            [
                'title' => 'Harry Potter 3',
                'price' => 39,
                'isbn' => 'ghi',
                'author' => 'JK Rowling',
                'published_at' => '2001-12-11',
                'image' => '03.jpg',
            ]
        ])->saveData();
    }
}
