<?php

require_once './db.php'


// var_dump($avatar);

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

            foreach ($movies as $movie)
                echo "<div class='col my-3'>
                <div class='card'>
                    <div class='card-img-top mt-3'>
                        <img src='" . $movie->img . "' alt='movie'>
                    </div>
                    <div class='card-body text-center'>
                        <div>" . $movie->title . "</div>
                        <div>" . $movie->year . "</div>
                        <div>" . $movie->getGenre() . "</div>
                        <div>" . $movie->getLanguage() . "</div>
                    </div>
                </div>
            </div>";
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>