<?php 
require_once __DIR__ .'/class/Movie.php';


$aQuiet = new Movie('A Quiet Place ','Horror', 2018, 91);
$aQuiet->setRatings(6);
/* var_dump($aQuiet);
var_dump($aQuiet->getRatings()); */
$theConjuring = new Movie('THE CONJURING - PER ORDINE DEL DIAVOLO', 'Horror', 2021, 89);
$theConjuring->setRatings(4);
/* var_dump($theConjuring);
var_dump($theConjuring->getRatings());
 */
$latest = [
    new Movie('A Quiet Place 2','Horror', 2021, 91),
    new Movie('SCHOOL OF MAFIA','Commedia', 2021, 90),
    new Movie('World War Z 2','Azione', 2021, 101),
    new Movie('Fast & Furious 9','Azione', 2021, 145),
    new Movie('Il Cattivo Poeta','Biografico', 2021, 106)
];

/* var_dump($latest); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1 </title>
</head>
<body>
  
    <?php foreach ($latest as $movie) : ?>
    <div>
        <h2><?php echo $movie->title ?></h2>
        <p>Genere: <?php echo $movie->genre ?></p>
        <p>Anno :<?php echo $movie->year ?></p>
        <p>Durata: <?php echo $movie->time ?> min</p>
    </div>

    <?php endforeach ?>
</body>
</html>


