<?php
//on recupére le mois courant et l'année courante
$selectedMonth = !empty ($_POST['month']) ?$_POST['month'] : date('m');
$selectedYear = !empty ($_POST['year']) ?$_POST['year'] : date('y');
// on recupere le nb de jours dans le mois
$intMonth = date('t', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));
// on recupere le premier 
$intPremj = date('N', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));
$weekDays = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$yearMonths = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre']
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <title>LE CALENDRIER la correction</title>
    </head>
    <body>
        <div class ="container-fluid">
            <h1>LE CALENDRIER</h1>
            <form method="post">
                <select name ="month">
                    <?php
                    foreach ($yearMonths as $monthNumber => $yearMonth):?>
                    <option value="<?= $monthNumber+1?>" <?php echo($selectedMonth== $monthNumber+1)? '' : ' ' ?>><?=$yearMonth?></option>
                    <?php endforeach; ?>
                </select>
                <select name ="year">
                    <?php
                    for ($year =1900; $year<=2100; $year ++):?>
                    <option value="<?= $year ?>" <?php echo($selectedYear== $year)? '' : ' ' ?>><?=$year?></option>
                    <?php endfor; ?>
                </select>
                <input type="submit"/>
            </form>
            <table class="table table-borderer">
                <thead>
                    <?php foreach ($weekDays as $weekDays) : ?>
                    <th>  <?php echo $weekDays ?></th>
                <?php endforeach; ?>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $loop = TRUE;
                        $cell = 1;
                        $day = 1;
                        $minCellNumber = $intMonth + $intPremj - 1;
                        while ($loop) {
                            if ($intPremj > $cell || $cell > $minCellNumber) {
                                ?>
                                <td class = "bg-secondary"></td>
                                <?php
                            } else {
                                ?>
                                <td class="bg-light"> <?= $day ?></td>
                                <?php
                                $day++;
                            }
                            if ($cell % 7 == 0) {
                                if ($cell >= $minCellNumber) {
                                    break;
                                }
                                ?>
                            </tr><tr>
                                <?php
                            }
                            $cell++;
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>