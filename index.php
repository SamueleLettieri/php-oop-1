<?php 
require_once __DIR__ . '/Movie.php';

$movies = [];
$movies[] = new Movie('The Martian', 'Fantascienza', '130 minuti', 'Ridley Scott');
$movies[] = new Movie("Harry Potter and the Philosopher's Stone", 'Fantastic', '151 minuti', 'Chris Columbus');
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