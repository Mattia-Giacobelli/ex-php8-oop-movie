<?php

class Genre
{

    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
};

class Movie
{

    public $title;
    public $year;
    public $img;
    public static $language = 'Italiano';

    protected $genre = [];

    public function __construct($_title, $_year, $_img, Genre $_genre)
    {

        $this->title = $_title;
        $this->year = $_year;
        $this->img = $_img;

        $this->genre[] = $_genre;
    }

    public function getLanguage()
    {
        return self::$language;
    }

    public function addGenre(Genre $_genre)
    {
        $this->genre[] = $_genre;
    }

    public function getGenre()
    {
        $genres = '';

        foreach ($this->genre as $genre) {

            $genres .= $genre->name;

            if ($this->genre[count($this->genre) - 1] != $genre) {
                $genres .= ', ';
            }
        }

        return $genres;
    }
}

$avatar = new Movie('Avatar', 2009, 'https://filmartgallery.com/cdn/shop/files/Avatar-Vintage-Movie-Poster-Original_39aff406.jpg?v=1749589696', new Genre('Fantascienza'));

$wallE = new Movie("Wall-E", 2008, 'https://www.ebay.it/itm/292628375448', new Genre('Fantascienza'));

$avatar->addGenre(new Genre('prova'));

var_dump($avatar);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Movies</title>
</head>

<body>
    <div class="container">
        <div class="row row-cols-3">
            <?php
            echo "<div class='col my-3'>
                <div class='card'>
                    <div class='card-img-top mt-3'>
                        <img src='" . $avatar->img . "' alt='Avatar'>
                    </div>
                    <div class='card-body text-center'>
                        <div>" . $avatar->title . "</div>
                        <div>" . $avatar->year . "</div>
                        <div>" . $avatar->getGenre() . "</div>
                        <div>" . $avatar->getLanguage() . "</div>
                    </div>
                </div>
            </div>";
            echo "<div class='col my-3'>
                <div class='card'>
                    <div class='card-img-top mt-3'>
                        <img src='" . $wallE->img . "' alt='Wall-E'>
                    </div>
                    <div class='card-body text-center'>
                        <div>" . $wallE->title . "</div>
                        <div>" . $wallE->year . "</div>
                        <div>" . $wallE->getGenre() . "</div>
                        <div>" . $wallE->getLanguage() . "</div>
                    </div>
                </div>
            </div>"
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>