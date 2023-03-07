<?php

namespace M2i\Mvc\Model;

class Book extends Model
{
    public $id_book;
    public $title;
    public $price;
    public $isbn;
    public $author;
    public $published_at;
    public $image;

    public function image()
    {
        return '/uploads/'.$this->image;
    }

    public function price()
    {
        return number_format($this->price * 1.2, 2, ',', '');
    }

    public function year()
    {
        return date('Y', strtotime($this->published_at));
    }
}
