<?php

echo "Test BDD avec SQL" . '<br>';

try {
    //Pour hostinger :
    //  $database = new PDO('mysql:host=localhost; dbname=u256533777_test', 'u256533777_christophec', 'Santa30420*', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $database = new PDO('mysql:host=localhost; dbname=store2', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    die('un pb de connexion !?! ' . $e->getMessage());
}

// la fleche est issu de la POO en php
// query : fonction issue de PDO qui appelle une requete sql
// le resultat est stocké dans la variable result

$results = $database->query('SELECT first_name, last_name from customers');

// var_dump($results->fetch());
// var_dump($results->fetch());
// var_dump($results->fetchAll());
echo'<br>';

//fetch ne retourne qu'une seule ligne...
//tant qu'il y a des lignes de donnéess, il peut boucler.

echo "<br>";
echo "après un Insert de Clark Kent";

$database->query('INSERT INTO customers(first_name, last_name) VALUES (\'Clark\', \'Kent\')');

// Si on connait la structure maispas les données que nous allons travailler
// on "prepare" puis execute"

$sql = $database->prepare('INSERT INTO customers(first_name, last_name) VALUES (?, ?)');

//On a enfin nos données

$firstName = "Kiki";
$lastName = "San";

$sql->execute([$firstName, $lastName]);

// affichage
while ($row = $results->fetch()) {
    echo $row['first_name'] . ' '. $row['last_name'] . '<br>';
};