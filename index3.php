<?php
$datefmt = new IntlDateFormatter('ru_RU', NULL, NULL, NULL, NULL, 'dd MMMM yyyy');
// pour une date qui vient d'un champ DATE(TIME) de MySQL
$date1 = date_create($row['DateJournal']);
// pour la date courante
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Partie9 exo3</title>
    </head>
    <body>
        <h1>EXERCICE 3</h1>
        <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français.</p>
        <div class="jumbotron jumbotron-fluid" style="background-color: purple">
  <div class="container">
    <h1 class="display-6" style="background-color:pink ; text-align:center">сегодняшняя дата</h1>
    <p style="color:black; text-align:center";>мы являемся <?php echo $datefmt->format($date1);?></P>
  </div>
</div>
</body>
</html>
