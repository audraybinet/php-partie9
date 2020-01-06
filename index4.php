<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Partie9 exo4</title>
    </head>
    <body>
        <h1>EXERCICE 4</h1>
        <p>
        <ul>
            <li>Afficher le timestamp du jour.</li>
            <li>Afficher le timestamp du mardi 2 août 2016 à 15h00.</li>
        </ul>
    </p>
    <div class="jumbotron jumbotron-fluid" style="background-color: purple">
        <div class="container">
            <h1 class="display-6" style="background-color:pink ; text-align:center">LE TIMESTAMP</h1>
            <p> Le timestamp du jour :
                <?php
                echo time(); // Affichera 1063911060
                ?></p>
            <p>Le timestamp du 02/08/2016 a 15h :<?php
                // Secondes écoulées entre le 1er janvier 1970 et le 27 mai 2002 à midi
                echo mktime(15, 0, 0, 8, 02, 2016); //Affichera 1022493600
                ?></p>
        </div>
    </div>
</body>
</html>
