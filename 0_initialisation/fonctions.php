<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>

<body>

    <h1>Les Fonctions</h1>

    <?php include 'menu.php' ?>

    <?php

    $x=2;
    $y=3;

    function add ($a,$b=100){
        echo $a+$b;
        echo '<br>';
    }

    add($x, $y);
    add($x)


    ?>

</body>

</html>