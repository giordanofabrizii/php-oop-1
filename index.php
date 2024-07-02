<?php 

require_once __DIR__ . '/models/movie.php';

$rawdata = file_get_contents('./utilities/db.json');

$data = json_decode($rawdata, true);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>

    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <main>
        <div class="article-container">
            <?php foreach($data as $film) { ?>
                <?php $element = new Movie($film['title'], $film['poster'], $film['genre']); ?>
                <article>
    
                    <h1> <?php echo $element->title ?> </h1>
                    <img src="<?php echo $element->poster ?>" alt="poster path">
                    <p><?php 
                        foreach($element->genre as $index => $genre) {
                            if ($index != count($element->genre) - 1) {
                                echo $genre . ', ';
                            } else {
                                echo $genre;
                            }
                        }
                    ?></p>
    
                </article>
            <?php } ?>
        </div>
    </main>

</body>
</html>