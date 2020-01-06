<?php
$date = date("d/m/Y");
$heure = date("H:i");

?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Partie9 exo1</title>
    </head>
    <body>
        <h1>EXERCICE 1</h1>
        <p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016) </p>
        <div class="jumbotron jumbotron-fluid" style="background-color: purple">
  <div class="container">
    <h1 class="display-6" style="background-color:pink ; text-align:center">LA DATE DU JOUR</h1>
    <p class="display-4"><?php Print("Nous sommes le $date et il est $heure");?></p>
  </div>
</div>
</body>
</html>
