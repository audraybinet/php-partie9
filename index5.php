<?php
$dateDebut = "2016/05/16" ;
$dateFin = "today";
$dureeSejour = (strtotime($dateFin) - strtotime($dateDebut));

?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Partie9 exo5</title>
    </head>
    <body>
        <h1>EXERCICE 5</h1>
        <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
        <div class="jumbotron jumbotron-fluid" style="background-color: purple">
  <div class="container">
    <h1 class="display-6" style="background-color:pink ; text-align:center">LE NOMBRE DE JOUR QUI NOUS SEPARE DU 16/05/2016 </h1>
    <p> le nombre de jour écoulé <?php echo number_format($dureeSejour/86400 ,0);?> jours </P>
  </div>
</div>
</body>
</html>

