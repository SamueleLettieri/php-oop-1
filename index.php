<?php 
require_once __DIR__ . '/Movie.php';

$movies = [];
$movies[] = new Movie('The Martian', 'Fantascienza', '130 min', 'Ridley Scott');
$movies[] = new Movie("Harry Potter and the Philosopher's Stone", 'fantastic, adventure', '151 min', 'Chris Columbus');
$movies[] = new Movie("Harry Potter and the Chamber of Secrets", 'fantastic, adventure', '160 min ', 'Chris Columbus');
$movies[] = new Movie("Harry Potter and the Prisoner of Azkaban", 'fantastic, adventure', '141 min', 'Alfonso Cuarón');
$movies[] = new Movie("	Harry Potter and the Goblet of Fire", 'fantastic, adventure', '153 min', 'Mike Newell');
$movies[] = new Movie("harry potter and the order of the phoenix", 'fantastic, adventure', '	137 min', 'David Yates');
$movies[] = new Movie("Harry Potter and the Deathly Hallows - Part 1", 'fantastic, adventure', '146 min', 'David Yates');
$movies[] = new Movie("Harry Potter and the Deathly Hallows - Part 2", 'fantastic, adventure', '130 min', '	David Yates');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1 </title>
</head>
<body>
    <h1>Movies</h1>

    <?php foreach ($movies as $movie){ ?>
    <li>
        <?php echo $movie->getTitle() . ' - ' . $movie->getGender() . ' - ' . $movie->getMinutes() . ' - ' . $movie->getmovieDirector() ?>
     </li>
    <?php } ?>


</body>
</html>