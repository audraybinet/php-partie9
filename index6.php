<?php
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Partie9 exo6</title>
    </head>
    <body>
        <h1>EXERCICE 6</h1>
        <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
        <div class="jumbotron jumbotron-fluid" style="background-color: purple">
            <div class="container">
                <h1 class="display-6" style="background-color:pink ; text-align:center">LE NOMBRE DE JOUR DU MOIS DE FEVRIER DE 2016</h1>
                <p style="color:black; text-align:center";><?php echo "Il y avait {$number} jours en Août 2016"; ?></p>
            </div>
        </div>
    </body>
</html>

