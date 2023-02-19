<?php 
ob_start(); 
echo styleTitreNiveau1("Ils ont besoin de vous !",COLOR_ASSO);
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class='bg-dark'></li>
    </ol>
    <div class="carousel-inner ">
        <!-- Début d'un ITEM -->
        <div class="carousel-item active ">
            <div class='row no-gutters border rounded overflow-hidden mb-4 perso_bgRose'>
                <div class='col-12 col-md-auto text-center'>
                    <img src ='public/sources/images/Animaux/chat/Framboise/Framboise.jpg' style='height:250px;' alt='photo de Framboise' />
                </div>
                <div class='col p-4 d-flex flex-column position-static'>
                    <h3 class='perso_ColorRoseMenu perso_policeTitre perso_textShadow'>Framboise</h3>
                    <div class='text-muted mb-1'>02/2019</div>
                    <p class='mb-auto'>
                        Description de Framboise
                    </p>
                    <a href="" class='btn btn-primary'>Visiter ma page </a>
                </div>
            </div>
        </div>
        <!-- Fin d'un ITEM -->
        <!-- Début d'un ITEM -->
        <div class="carousel-item">
            <div class='row no-gutters border rounded overflow-hidden mb-4 perso_bgRose'>
                <div class='col-12 col-md-auto text-center'>
                    <img src ='public/sources/images/Animaux/chat/Framboise/Framboise.jpg' style='height:250px;' alt='photo de Framboise' />
                </div>
                <div class='col p-4 d-flex flex-column position-static'>
                    <h3 class='perso_ColorRoseMenu perso_policeTitre perso_textShadow'>Framboise</h3>
                    <div>02/2019</div>
                    <p>
                        Description de Framboise
                    </p>
                    <a href="" class='btn btn-primary'>Visiter ma page </a>
                </div>
            </div>
        </div>
        <!-- Fin d'un ITEM -->
    </div>
</div>
<div class='row'>
    <div class='col-6 mt-3'>
        <?php 
        $txt = "<img src='public/sources/images/Autres/icones/journal.png' alt='logo News'/>Nouvelles des adoptés";
        echo styleTitreNiveau2($txt,COLOR_ACTUS);
        ?>
    </div>
    <div class='col-6 mt-3'>
        <?php 
        $txt = "<img src='public/sources/images/Autres/icones/action.png' alt='logo News'/>Evénements & Actions";
        echo styleTitreNiveau2($txt,COLOR_PENSIONNAIRE);
        ?>
    </div>
</div>
<div class='row'>
    <div class='col-6'>
        <div class='row no-gutters border rounded mb-4'>
            <div class='col-auto d-none d-lg-block'>
                <img src ='public/sources/images/Animaux/chat/Framboise/Framboise.jpg' style='height:150px;' alt='photo de Framboise' />
            </div>
            <div class='col p-3 d-flew flex-column position-static perso_bgGreen'>
                <h3 class='mb-0 perso_ColorVertMenu perso_policeTitre perso_textShadow'>Doyenne Chipie</h3>
                <p class='perso_size12 mt-2'>Un petit coucou de notre doyenne CHIPIE (20ans) en famille d accueil longue durée chez notre trésorière.<br/>
                    La miss a un programme journalier surchargé...
                </p>
                <a href="" class='btn btn-primary'>Visiter ma page </a>
            </div>
        </div>
    </div>
    <div class='col-6'>
        <div class='row no-gutters border rounded mb-4'>
            <div class='col-auto d-none d-lg-block'>
                <img src ='public/sources/images/Animaux/chat/Framboise/Framboise.jpg' style='height:150px;' alt='photo de Framboise' />
            </div>
            <div class='col p-3 d-flew flex-column position-static perso_bgOrange'>
                <h3 class='mb-0 perso_ColorOrangeMenu perso_policeTitre perso_textShadow'>Doyenne Chipie</h3>
                <p class='perso_size12 mt-2'>Un petit coucou de notre doyenne CHIPIE (20ans) en famille d accueil longue durée chez notre trésorière.<br/>
                    La miss a un programme journalier surchargé...
                </p>
                <a href="" class='btn btn-primary'>Visiter ma page </a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "views/commons/template.php"
?>
            
      