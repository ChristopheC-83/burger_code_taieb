<?php 
require_once "pdo.php";
include("../Commons/header.php");?>

<?php 
$bdd = connexionPDO();
$req = '
SELECT * 
FROM animal 
where id_statut = :idStatut';
if((int) $_GET['idstatut'] === ID_STATUT_ADOPTE){
    $req .= ' or id_statut = '.ID_STATUT_MORT;
}
$stmt = $bdd->prepare($req);
$stmt->bindValue(":idStatut",$_GET['idstatut']);
$stmt->execute();
$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
?>

<?php
$titreH1 = "";
if((int)$_GET['idstatut'] === ID_STATUT_A_L_ADOPTION)
    $titreH1 = "Ils cherchent une famille";
else if((int)$_GET['idstatut'] === ID_STATUT_ADOPTE)
    $titreH1 = "Les anciens";
else if((int)$_GET['idstatut'] === ID_STATUT_FALD)
    $titreH1 = "Famille d'accueil longue durée";
echo styleTitreNiveau1($titreH1, COLOR_PENSIONNAIRE) ?>

<div class='row no-gutters'>
    <?php foreach($animaux as $animal) : ?>
        <?php 
            $stmt = $bdd->prepare('
                select i.id_image,libelle_image,url_image,description_image
                from image i
                inner join contient c on i.id_image = c.id_image
                inner join animal a on a.id_animal = c.id_animal
                where a.id_animal= :idAnimal
                LIMIT 1
            ');
            $stmt->bindValue(":idAnimal",$animal['id_animal']);
            $stmt->execute();
            $image = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
        ?>
    <div class="col-12 col-lg-6">
        <div class='row border border-dark rounded-lg m-2 align-items-center <?= ($animal['sexe']) ? "perso_bgGreen" : "perso_bgRose" ?>' style="height:200px;">
            <div class="col p-2 text-center">
                <img src='../../sources/images/Animaux/<?= $animal['type_animal'] ?>/<?= $image['url_image'] ?>' class="img-thumbnail" style="max-height:180px;" alt="<?= $image['libelle_image'] ?>" />
            </div>
            <?php 
            $iconeChien = "";
            if($animal['ami_chien'] === "oui") $iconeChien = "ChienOk";
            else if($animal['ami_chien'] === "non") $iconeChien = "ChienBar";
            else if($animal['ami_chien'] === "N/A") $iconeChien = "ChienQuest";
            $iconeChat = "";
            if($animal['ami_chat'] === "oui") $iconeChat = "ChatOk";
            else if($animal['ami_chat'] === "non") $iconeChat = "ChatBar";
            else if($animal['ami_chat'] === "N/A") $iconeChat = "ChatQuest";
            $inconeEnfant = "";
            if($animal['ami_enfant'] === "oui") $inconeEnfant = "babyOk";
            else if($animal['ami_enfant'] === "non") $inconeEnfant = "babyBar";
            else if($animal['ami_enfant'] === "N/A") $inconeEnfant = "babyQuest";
            ?>
            <div class="col-2 border-left border-right border-dark text-center">
                <img src='../../sources/images/Autres/icones/<?= $iconeChien  ?>.png' class="img-fluid m-1" style="width:50px;" alt="chienOk" />
                <img src='../../sources/images/Autres/icones/<?= $iconeChat  ?>.png' class="img-fluid m-1" style="width:50px;" alt="chatOk" />
                <img src='../../sources/images/Autres/icones/<?= $inconeEnfant  ?>.png' class="img-fluid m-1" style="width:50px;" alt="bayOk" />
            </div>
            <div class="col-6 text-center">
                <div class="perso_policeTitre perso_size20 mb-3"><?= $animal['nom_animal']?></div>
                <div class="mb-2"><?= $animal['date_naissance_animal']?></div>
                <?php 
                    $stmt = $bdd->prepare('
                        select c.libelle_caractere
                        from caractere c 
                        inner join dispose d on c.id_caractere = d.id_caractere
                        where id_animal = :idAnimal
                    ');
                    $stmt->bindValue(":idAnimal",$animal['id_animal']);
                    $stmt->execute();
                    $caracteres = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $stmt->closeCursor();
                ?>
                <div class="my-3">
                    <?php foreach ($caracteres as $caractere) {?>
                    <span class="badge badge-warning m-1 p-2 d-none d-sm-inline"> <?= $caractere['libelle_caractere'] ?></span>
                   
                    <?php } ?>
                </div>
                <a href="animal.php?idAnimal=<?= $animal['id_animal'] ?>" class="btn btn-primary">Visiter ma page </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include("../Commons/footer.php"); ?>