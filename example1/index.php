<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>PHP Example 1</title>
  </head>
  <body class="container mt-5">
    <h1>PHP Example 1</h1>

<?php
    // PHP code goes here!
    $var1 = "hello, world!";
    echo "<p>" . $var1 . "</p>\n";

    $colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple'];

?>

<hr />

<ul>
<?php
    for ($i = 0; $i < 10; $i++) {
        echo "<li>I am counting stuff and this is #" . $i . "</li>\n";
    }
?>
</ul>

<ul>
<?php
    foreach ($colors as $color) {
        echo '<li>' . $color . "</li>\n";
    }
?>
</ul>

<hr />

<?php

    foreach ($colors as $color) {

        echo '<div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="background-color: ' . $color . '">' . $color . '</h5>
            <p class="card-text">Some quick example text for the color ' . $color . ' to build on the card title and make up the bulk of the card\'s content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>' . "\n";

    }

?>

<hr />

<?php
    foreach ($colors as $color) {
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title" style="background-color: <?=$color ?>"><?=$color ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go to the <?=$color ?> link</a>
  </div>
</div>

<?php
    }
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
