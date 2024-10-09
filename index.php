<?php 
//definisco la classe
class Movie {
    // # Dichiaro le variabili di istanza
    public string $title;
    public string $director;
    public string $genre;
    public int $vote;

    // # Dichiaro un costruttore per le variabili di istanza
    public function __construct($title, $director, $genre, $vote)
    {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->vote = $vote;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8 - Object</title>
</head>

<body>
    <main>
        <?php
        
        ?>
    </main>
</body>

</html>