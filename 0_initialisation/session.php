<?php
session_start();

$_SESSION["nom"] = "Kiki";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <h1>Session</h1>

    <?php include 'menu.php' ?>


    <a href="getPost.php" > Who are you ? </a>

</body>