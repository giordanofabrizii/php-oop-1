<?php 

class Movie {
    public $title;
    public $year;
    public $genre;

    public function __construct($title, $year, $genre) {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }
    
}

$movie1 = new Movie("A","2020","b")

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
        <?php 
        
            echo $movie1->title;
            echo $movie1->year;
            echo $movie1->genre;

        ?>
    </main>
</body>
</html>