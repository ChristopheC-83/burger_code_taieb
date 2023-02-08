<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>

<body>
    <h1>Les Boucles</h1>
    
	<?php include 'menu.php' ?>

    <?php
    $i = 0;
    while ($i < 10) {
        echo "i vaut " . $i . "<br>";
        $i += 1;
    };
    echo "<br>";
    for ($x = 0; $x <= 10; $x++) {
        echo "x vaut " . $x . "<br>";
    };





    ?>


</body>

</html>