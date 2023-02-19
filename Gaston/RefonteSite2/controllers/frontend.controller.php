<?php

require_once("public/utile/formatage.php");
require_once "models/animal.dao.php";
require_once "config/config.php";
function getPensionnaires()
{
    $title = "Pages des Pensionnaires";
    $description = "La page des pensionnaires";

    $animaux = getAnimalFromStatut($_GET['idstatut']);


    $titreH1 = "";
    if ((int)$_GET['idstatut'] === ID_STATUT_A_L_ADOPTION)
        $titreH1 = "Ils cherchent une famille";
    else if ((int)$_GET['idstatut'] === ID_STATUT_ADOPTE)
        $titreH1 = "Les anciens";
    else if ((int)$_GET['idstatut'] === ID_STATUT_FALD)
        $titreH1 = "Famille d'accueil longue durée";

    foreach ($animaux as $key => $animal) {
        $image = getFirstImageAnimal($animal['id_animal']);
        $animaux[$key]['image'] = $image;

        $caracteres = getCaracteresFromAnimal($animal['id_animal']);
        $animaux[$key]['caracteres'] = $caracteres;
    }


    require_once "views/front/pensionnaires.view.php";
}

function getPageAccueil()
{

    $title = "Page d'accueil";
    $description = "Nos amis les animaux (N.A.N.A.)";


    require_once "views/front/accueil.view.php";
}
function getPageAssociation()
{

    $title = "L'association";
    $description = "L'association N.A.N.A.";


    require_once "views/front/association/association.view.php";
}
function getPagePartenaires()
{
    $title = "Les partenaires";
    $description = "Nos partenaires";
    require_once "views/front/association/partenaires.view.php";
}
function getPageTemperatures()
{
    $title = "Les temperatures";
    $description = "Nos animaux et la temperature";
    require_once "views/front/articles/temperatures.view.php";
}
function getPageChocolat()
{
    $title = "Chocolat";
    $description = "Nos amis et le chocolat";
    require_once "views/front/articles/chocolat.view.php";
}
function getPagePlantes()
{
    $title = "Les Plantes";
    $description = "Nos Plantes et nos amis";
    require_once "views/front/articles/plantes.view.php";
}
function getPageSterilisation()
{
    $title = "Les Sterilisation";
    $description = "Sterilisation et intérêt";
    require_once "views/front/articles/sterilisation.view.php";
}
function getPageEducateur()
{
    $title = "Les Educateurs";
    $description = "Nos Educateurs maison";
    require_once "views/front/articles/educateur.view.php";
}
function getPageContact()
{
    $title = "Contact";
    $description = "Nous contacter";
    require_once "views/front/contact/contact.view.php";
}
function getPageDon()
{
    $title = "Les Dons";
    $description = "Fairte un don";
    require_once "views/front/contact/don.view.php";
}
function getPageMentions()
{
    $title = "Les Mentions Légales";
    $description = "Les Mentions Légales de N.A.N.A.";
    require_once "views/front/contact/mentions.view.php";
}
function getPageActus()
{
    $title = "Les actualités";
    $description = "Les actualités de l'asso N.A.N.A.";
    require_once "views/front/actus.view.php";
}
function getPageAnimal()
{
    $animal = getAnimalFromIDAnimal($_GET['idAnimal']);
    $title = "La page de ".$animal['nom_animal'].".";
    $description = "La page de ".$animal['nom_animal'].".";
    $images = getImagesFromAnimal($_GET['idAnimal']);
    $caracteres = getCaracteresFromAnimal($_GET['idAnimal']);

    
    require_once "views/front/animal.view.php";
}
