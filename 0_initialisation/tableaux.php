<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>

<body>
    <h1>Tableaux</h1>

    <?php include 'menu.php' ?>


    <?php

    $week = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];
    echo $week[0];
    echo "<BR>";

    var_dump($week);

    echo "<BR>";
    print_r($week);
    echo "<BR>";
    echo "il y a " . count($week) . " elements dans le tableau week";
    echo "<BR>";


    for ($i = 0; $i <= 6; $i++) {
        echo $week[$i];
        echo "<BR>";
    }

    echo "<BR>";
    $velos = ["bof" => "D4", "bien" => "Cannondale", "top" => "spe", "divin" => "Santa Cruz"];

    echo $velos["divin"];

    echo "<BR>";

    foreach($velos as $level=>$marque){
        echo "$marque c'est $level <br>";

    }
    





    ?>