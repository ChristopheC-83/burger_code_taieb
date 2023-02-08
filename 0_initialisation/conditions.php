<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>



<body>
    <h1>Les Conditions</h1>

	<?php include 'menu.php' ?>

    <?php

    $motivation = 7;

    if ($motivation >= 8) {
        echo "Va faire du vélo";
    } elseif ($motivation >= 6) {
        echo "Va courir un petit coup !";
    } else {
        echo "Reste au chaud feignasse !";
    }
    ;
    echo "<br/>";


    $objectif=78 ;

    switch ($objectif) {
        case 80:
            echo "cool mais peut faire mieux";
            break;
        case 79:
            echo "Super, tu peux le faire";
            break;
        case 78:
            echo "Enorme, ça va envoyer";
            break;
        case 77:
            echo "Miraculeux, ça grimpe aux arbres";
            break;
        default:
            echo "ton obj ?";
    }



    ?>

</body>

</html>