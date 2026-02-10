<?php

class Movie
{

    public $title;
    public $year;
    public $img;
    public static $language = 'Italiano';

    public function __construct($_title, $_year, $_img)
    {

        $this->title = $_title;
        $this->year = $_year;
        $this->img = $_img;
    }

    public function getLanguage()
    {

        return self::$language;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

</body>

</html>