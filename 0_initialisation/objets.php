<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objets</title>
</head>

<body>
    <h1>Objets</h1>

    <?php include 'menu.php' ?>


    <?php

    class Personnes
    {
        public $name;
        public $age;
        public $etudie;
        public $notes;

        public function __construct($name, $age, $etudie, $notes)
        {
            $this->name = $name;
            $this->age = $age;
            $this->etudie = $etudie;
            $this->notes = $notes;
        }

        public function sePresente()
        {
            echo "Bonjour, je m'appelle $this->name et j'ai $this->age ans.<br>";
            if ($this->etudie) {
                echo "Mes notes sont :<br>";
                foreach ($this->notes as $matiere => $note) {
                    echo "En $matiere, j'ai $note /20 <br>";
                }
            } else {
                echo "Oula !!! Mes années d'études sont loin !!! <br>";
            }
            echo "<br><br>";
        }
    }

    $kiki = new Personnes(
        "Christophe",
        42,
        true,
        [
            "math" => 15,
            "chimie" => 17,
            "bio" => 14,
            "francais" => 11,
        ]
    );
    $van = new Personnes(
        "Vanessa",
        44,
        false,
        [
            "math" => 17,
            "chimie" => 15,
            "bio" => 15,
            "francais" => 13,
        ]
    );

    $kiki->sePresente();
    $van->sePresente();




	var_dump($GLOBALS);
    echo "<br><br>";
	var_dump($_SERVER);
    echo $_SERVER["SERVER_SIGNATURE"]





    ?>

</body>