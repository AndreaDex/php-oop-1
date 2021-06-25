<?php 
class Movie 
{
    public $title;
    public $genre;
    public $year;
    public $time;
    public $ratings;

    public function setRatings(int $rating){
        return $this->ratings = $rating;
    }

    public function getRatings(){
        echo $this->ratings;
    }
    /**
     * Crea un oggetto film
     * @param string $titile Titolo del film
     * @param string $genre Genere del film  
     * @param int $year Anno di uscita
     * @param int $time Durata
     */
    public function __constructor(string $titile, string $genre, int $year, int $time){
        $this->$titile = $titile;
        $this->$genre = $genre;
        $this->$year = $year;
        $this->$time = $time;
    }


}

