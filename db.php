<?php

require_once './traits/Language.php';
require_once './models/Genre.php';
require_once './models/Movie.php';

$movies = [];

$avatar = new Movie('Avatar', 2009, 'https://filmartgallery.com/cdn/shop/files/Avatar-Vintage-Movie-Poster-Original_39aff406.jpg?v=1749589696', new Genre('Fantascienza'));

$wallE = new Movie("Wall-E", 2008, 'https://www.ebay.it/itm/292628375448', new Genre('Fantascienza'));

$avatar->addGenre(new Genre('prova'));

$movies[] = $avatar;
$movies[] = $wallE;
