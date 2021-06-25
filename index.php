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


$aQuiet = new Movie('A Quiet Place ','Horror', 2018, 91);
$aQuiet->setRatings(6);
var_dump($aQuiet);
var_dump($aQuiet->getRatings());


$latest = [
    new Movie('A Quiet Place 2','Horror', 2021, 91),
    new Movie('SCHOOL OF MAFIA','Commedia', 2021, 90),
    new Movie('World War Z 2','Azione', 2021, 101),
    new Movie('Fast & Furious 9','Azione', 2021, 145),
    new Movie('Il Cattivo Poeta','Biografico', 2021, 106)
];

var_dump($latest);


