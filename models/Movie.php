<?php

class Movie
{

    public $title;
    public $year;
    public $img;

    protected $genre = [];

    use Language;

    public function __construct($_title, $_year, $_img, Genre $_genre)
    {

        $this->title = $_title;
        $this->year = $_year;
        $this->img = $_img;

        $this->genre[] = $_genre;
    }

    public function addGenre(Genre $_genre)
    {
        $this->genre[] = $_genre;
    }

    public function getGenre()
    {
        $genres = '';

        foreach ($this->genre as $genre) {

            $genres .= $genre->name;

            if ($this->genre[count($this->genre) - 1] != $genre) {
                $genres .= ', ';
            }
        }

        return $genres;
    }
}
