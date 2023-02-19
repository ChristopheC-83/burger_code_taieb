<?php 
ob_start();?>

<?= styleTitreNiveau1("Actus", COLOR_ACTUS) ; ?>

<?= styleTitrePost("Posté le : <span class='".COLOR_ACTUS."'>05/2018 </span> par <span class='".COLOR_ACTUS."'>Framboise</span>");?>
<div class='row no-gutters align-items-center' style="min-height:300px;">
    <div class="col-12 col-md-3 text-center">
        <img src="public/sources/images/Animaux/Chat/framboise/framboise.jpg" alt="Framboise" style="max-height:280px" />
    </div>
    <div class="col-12 col-md-9">
    Un petit coucou de notre doyenne CHIPIE (20ans) en famille d accueil longue durée chez notre trésorière.<br/>
La miss a un programme journalier surchargé :<br/>
Manger, dormir, petit tour à la litière, retour dans le dodo juste devant le chauffage, câlins à ma Tatynou pour qu elle me donne des friandises et re dodo.
Merci à tous pour les petits cadeaux, elle apprécie la gourmande 😉<br/><br/>

Bonne fin de soirée à tous et à bientôt pr la suite des aventures de mamie Chipie ❣️
    </div>
</div>


<?= styleTitrePost("Posté le : <span class='".COLOR_ACTUS."'>05/2018 </span> par <span class='".COLOR_ACTUS."'>Odin</span>");?>
<div class='row no-gutters align-items-center' style="min-height:300px;">
    <div class="col-12 col-md-3 text-center">
        <img src="public/sources/images/Animaux/chien/fonzie/fonzie.jpg" alt="Framboise" style="max-height:280px" />
    </div>
    <div class="col-12 col-md-9">
    Petit rappel rapide de l’histoire.<br/><br/>

Lundi une de nos amies, Cynthia, trouve cette petite misère sur la route devant des poubelles.<br/>
Direction vétérinaire, son pronostic vital est engagé nous décidons de tenter le coup.<br/>
Aveugle, une otite énorme, une patte « morte » des griffes enfoncées dans les coussinets, une hypothermie et un poids de 1kg500...
<br/><br/>
Mathilde, notre adorable vétérinaire nous dit qu'elle est vieille, proche des 20 ans.<br/>
Vendredi, un monsieur se met en relation avec nous et explique qu’il s’agit de Chipie 20 ans, la chatte de sa maman qui est malheureusement décédée.<br/>
Ne pouvant pas la prendre chez lui à cause de son chien et ne voulant pas la changer de lieu à son âge elle reste dans la maison inhabitée et ils viennent la voir chaque jour. Par contre nous ne savons pas expliquer comment Chipie s'est retrouvée devant cette poubelle ! Elle avait disparu du jardin et ils ont cru qu'elle était partie mourir quelque part...
<br/><br/>
En accord avec eux, Chipie restera à l'association et plus particulièrement chez Karine notre trésorière où elle a son petit coin douillet à côté du radiateur et beaucoup de câlins et d'amour 💛.
<br/><br/>
Elle a repris un peu de poids, ses otites guérissent doucement, ses pattes cicatrisent bien mais voilà CHIPIE a 20 ans, son petit corps est fatigué, elle dort énormément. Semaine prochaine elle revoit Mathilde notre vétérinaire pour faire un point.
<br/><br/>
Nous allons la chouchouter un maximum et veiller à son bien-être jusqu’au dernier moment.
Nourriture à volonté (viande crue, croquettes ramollies, sachets fraîcheur, etc) un petit coin bien chaud et beaucoup beaucoup d'amour.
<br/><br/>
Merci à TOUS pour votre confiance, à son ancienne famille qui accepte que Chipie termine sa vie avec nous, à Karine sa Tatynou, Laure pour les soins, Cynthia pour le sauvetage, le cabinet vétérinaire Debailleul et sa super équipe, etc etc
<br/><br/>
Voilà notre petite douceur de Noël 💜
    </div>
</div>

<?php
  $content = ob_get_clean();
  require "views/commons/template.php";
  ?>