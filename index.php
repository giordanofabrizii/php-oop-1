<?php 

require_once __DIR__ . '/models/movie.php';

$rawdata = file_get_contents('./utilities/db.json');

$data = json_decode($rawdata, true);

// $m = new Movie("ciao", "ciao", new genre("blu"));
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    <main>
        <?php foreach($data as $film) { ?>
            <?php $element = new Movie($film['title'], $film['poster'], $film['genre']); ?>
            <article>
                <h1> <?php echo $element->title ?> </h1>
                <img src="<?php echo $element->poster ?>" alt="poster path">
                <p> Genre: <?php echo $element->genre ?></p>

            </article>
        <?php } ?>
    </main>
</body>
</html>