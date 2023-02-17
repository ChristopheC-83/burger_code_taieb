<?php
require_once "config.php";
require_once "pdo.php";
include("../Commons/header.php"); ?>


<?php

//on se connect à travers PDO 
//chemin bdd, nom utilisateur, mdp (ici vide)
$bdd = connexionPDO();

//on prépare un statement en attente de notre bdd
$stmt = $bdd->prepare("SELECT * FROM animal");

// on l'execute
$stmt->execute();

//on récupère les données dans une variable
//PDO::FETCH_ASSOC pour eviter les doublons qd tableaux associatifs
$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);

// on se déconnecte
$stmt->closeCursor();

// <pre> car résultats sous forme de tableau
// echo "<pre>";
// print_r($resultats);


styleTitreNiveau1("Ils cherchent une famille", COLOR_PENSIONNAIRE) ?>

<div class='row no-gutters'>

    <?php
    foreach ($animaux as $animal) : ?>

        <?php
        $stmt = $bdd->prepare('
            SELECT i.id_image, libelle_image, url_image, description_image
            from image i
            inner join contient c on i.id_image = c.id_image
            inner join animal a on a.id_animal = c.id_animal
            where a.id_animal= :idAnimal
            LIMIT 1
        ');
        $stmt->bindValue(":idAnimal", $animal['id_animal']);
        $stmt->execute();
        $image = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();


        ?>

        <div class="col-12 col-lg-6">
            <div class='row border border-dark rounded-lg m-2 align-items-center perso_bgRose' style="height:200px;">
                <div class="col p-2 text-center">
                    <img src='../../sources/images/Animaux/<?= $animal['type_animal'] ?>/<?= $image['url_image'] ?>' class="img-thumbnail" style="max-height:180px;" alt="<?= $animal['nom_animal'] ?>" />
                </div>
                <?php
                $iconeChien = "";
                if ($animal['ami_chien'] === "oui") $iconeChien = "chienOK";
                elseif ($animal['ami_chien'] === "non") $iconeChien = "ChienBar";
                elseif ($animal['ami_chien'] === "N/A") $iconeChien = "chienQuest";
                $iconeChat = "";
                if ($animal['ami_chat'] === "oui") $iconeChat = "chatOK";
                elseif ($animal['ami_chat'] === "non") $iconeChat = "chatBar";
                elseif ($animal['ami_chat'] === "N/A") $iconeChat = "chatQuest";
                $iconeBaby = "";
                if ($animal['ami_enfant'] === "oui") $iconeBaby = "babyOK";
                elseif ($animal['ami_enfant'] === "non") $iconeBaby = "babyBar";
                elseif ($animal['ami_enfant'] === "N/A") $iconeBaby = "babyQuest";


                ?>


                <div class="col-2 border-left border-right border-dark text-center">
                    <img src='../../sources/images/Autres/icones/<?= $iconeChien ?>.png' class="img-fluid m-1" style="width:50px;" alt="chienOk" />
                    <img src='../../sources/images/Autres/icones/<?= $iconeChat ?>.png' class="img-fluid m-1" style="width:50px;" alt="chatOk" />
                    <img src='../../sources/images/Autres/icones/<?= $iconeBaby ?>.png' class="img-fluid m-1" style="width:50px;" alt="bayOk" />
                </div>
                <div class="col-6 text-center">
                    <div class="perso_policeTitre perso_size20 mb-3"><?= $animal['nom_animal']; ?></div>
                    <div class="mb-2">Né : <?= $animal['date_naissance_animal']; ?></div>

                    <?php
                    $stmt = $bdd->prepare('
                        select c.libelle_caractere
                        from caractere c
                        inner join dispose d on c.id_caractere = d.id_caractere
                        where id_animal = :idAnimal
                    ');
                    $stmt->bindValue(":idAnimal", $animal['id_animal']);
                    $stmt->execute();
                    $caracteres = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $stmt->closeCursor();


                    ?>

                    <div class="my-3">
                        <?php  foreach ($caracteres as $caractere) { ?>
                        <span class="badge badge-warning m-1 p-2 d-none d-sm-inline"> <?=$caractere['libelle_caractere']?> </span>
                        <?php  } ?>
                    </div>
                    <a href="animal.php?idAnimal=<?=$animal['id_animal']  ?>" class="btn btn-primary">Visiter ma page </a>
                </div>
            </div>
        </div>

    <?php endforeach ?>

</div>

<?php include("../Commons/footer.php"); ?>