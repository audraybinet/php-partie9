<?php
$jour = date("Y-m-d"); // Notre Date par default
//Augmenter de 20 Jours
$maDate = strtotime($jour."+ 20 days");

?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Partie9 exo7</title>
    </head>
    <body>
        <h1>EXERCICE 7</h1>
        <p>Afficher la date du jour + 20 jours.</p>
        <div class="jumbotron jumbotron-fluid" style="background-color: purple">
            <div class="container">
                <h1 class="display-6" style="background-color:pink ; text-align:center">Date du jour + 20jours</h1>
                <p><?php echo date("Y-m-d",$maDate) . "\n";?></p>
            </div>
        </div>
    </body>
</html>
