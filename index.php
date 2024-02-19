<?php
    class Movie {

        public $title;
        public $year;
        public $genre;
        public $director;
        public $duration;
        public $description;
        public $availableForStreaming;

        public function __constant(string $title, string $genre)
        {
            $this->title = $title;
            $this->setGenre($genre);
            $this->direction = 'SCONOSCIUTO';
            $this->description = 'SCONOSCIUTO';
        }

        public function getGenre()
        {
            return $this->genre;
        }

        public function setGenre($genre)
        {
            if (is_string($genre)) {
            $this->genre = $genre;
            }
            else {
                echo '<h3 style="color: red;">ERRORE: genre deve avere una stringa</h3>';
            }
        }

    }



    $movieOne = new Movie();
    $movieOne->title = 'Barbie';
    $movieOne->setGenre('Commedia');

    var_dump($movieOne);
    var_dump($movieOne->getGenre());

    $movieTwo = new Movie();
    $movieTwo->title = 'Oppenheimer';
    $movieTwo->setGenre('3');

    var_dump($movie2->genre);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        HEADER
    </header>

    <main>
        BODY
    </main>

    <footer>
        FOOTER
    </footer>

</body>
</html>