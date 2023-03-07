<?php

namespace M2i\Mvc\Model;

class Movie extends Model
{
    public $id_movie;
    public $title;
    public $released_at;
    public $description;
    public $duration;
    public $cover;
    public $id_category;

    public function cover()
    {
        return 'uploads/'.$this->cover;
    }
}
