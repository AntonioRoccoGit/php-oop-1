<?php
class Movie
{
    public $originalTitle;
    public $originalLenguage;
    public $title;
    public $genre;
    public $poster;
    public $description;
    public $vote;

    function __construct($_originalTitle)
    {
        $this->originalTitle = $_originalTitle;
    }

    public function printData()
    {
        return "Il film si chiama: {$this->title}";
    }
    public function setGenre(...$_genreID)
    // i can set multiple genre id
    {
        $this->genre = $_genreID;
    }
}
