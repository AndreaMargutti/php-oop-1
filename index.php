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

    //Aggiungo un metodo che trasformi il voto in una stringa
    public function getVoteMessage($number){
        $message = "";
        if($number >= 5) {
            $message = "Bel film";
        } else {
            $message =  "Brutto film";
        }
        return $message;
    }
}

$avengers = new Movie("Avengers", "direttore1", "action", 4);
$split = new Movie("Split", "direttore2", "horror", 10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP8 - Object</title>
</head>

<body>
    <main class="container text-center">
        <h1 class="py-3">PHP8 - Obj - Movies</h1>
        <div class="mb-3">
            <?= $avengers->title ?>
            <?= $avengers->director ?>
            <?= $avengers->genre ?>
            <?= $avengers->getVoteMessage($avengers->vote) ?>
        </div>
        <div class="mb-3">
            <?= $split->title ?>
            <?= $split->director ?>
            <?= $split->genre ?>
            <?= $split->getVoteMessage($split->vote) ?>
        </div>
    </main>
</body>

</html>