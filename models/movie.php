<?php 

require_once __DIR__ . '/genre.php';

class Movie {
    public $title;
    public $poster;
    public $genre;

    public function __construct($_title, $_poster, $_genre) {
        // < function to get the correct path
        
        $this->title = $_title;
        $this->poster = $this->getPath($_poster);
        $this->genre = $_genre;
        
    }

    private function getPath($_poster) {
        return 'https://image.tmdb.org/t/p/w342/' . $_poster;
    }
    
}