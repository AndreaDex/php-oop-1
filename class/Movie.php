<?php 
class Movie 
{
    public $title;
    public $genre;
    public $year;
    public $time;
    public $ratings;

    public function setRatings(int $rating){
        $this->ratings = $rating;
    }

    public function getRatings(){
        return $this->ratings;
    }

    /**
     * Crea un oggetto film
     * @param string $title Titolo del film
     * @param string $genre Genere del film  
     * @param int $year Anno di uscita
     * @param int $time Durata
     */
    public function __construct(string $title, string $genre, int $year, int $time){
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->time = $time;
    }


};