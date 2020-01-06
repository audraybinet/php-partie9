<?php
// on recupère les variable
if (!isset($_GET['mois']))
    $nbMonth = date("n");
else
    $nbMonth = $_GET['mois'];
if (!isset($_GET['annee']))
    $nbYear = date("Y");
else
    $nbYear = $_GET['annee'];

//les fléches de navigation
if ($nbMonth < 1) {
    $nbMonth = 12;
    $nbYear = $nbYear - 1;
} elseif ($nbMonth > 12) {
    $nbMonth = 1;
    $nbYear = $nbYear + 1;
}

// nombre de jours dans le mois et numero du premier jour du mois
$int_nbj = date("t", mktime(0, 0, 0, $nbMonth, 1, $nbYear));
$int_premj = date("w", mktime(0, 0, 0, $nbMonth, 1, $nbYear));

// tableau des jours, tableau des mois...
$tab_jours = array("", "Lu", "Ma", "Me", "Je", "Ve", "Sa", "Di");
$tab_mois = array("", "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");

$int_nbjAV = date("t", mktime(0, 0, 0, ($nbMonth - 1 < 1) ? 12 : $nbMonth - 1, 1, $nbYear)); // nb de jours du moi d'avant
$int_nbjAP = date("t", mktime(0, 0, 0, ($nbMonth + 1 > 12) ? 1 : $nbMonth + 1, 1, $nbYear)); // b de jours du mois d'apres
// on affiche les jours du mois et aussi les jours du mois avant/apres, on les indique par une * a l'affichage on modifie l'apparence des chiffres *
$tab_cal = array(array(), array(), array(), array(), array(), array()); // tab_cal[Semaine][Jour de la semaine]
$int_premj = ($int_premj == 0) ? 7 : $int_premj;
$t = 1;
$p = "";
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if ($j + 1 == $int_premj && $t == 1) {
            $tab_cal[$i][$j] = $t;
            $t++;
        } // on stocke le premier jour du mois
        elseif ($t > 1 && $t <= $int_nbj) {
            $tab_cal[$i][$j] = $p . $t;
            $t++;
        } // on incremente a chaque fois...
        elseif ($t > $int_nbj) {
            $p = "*";
            $tab_cal[$i][$j] = $p . "1";
            $t = 2;
        } // on a mis tout les numeros de ce mois, on commence a mettre ceux du suivant
        elseif ($t == 1) {
            $tab_cal[$i][$j] = "*" . ($int_nbjAV - ($int_premj - ($j + 1)) + 1);
        } // on a pas encore mis les num du mois, on met ceux de celui d'avant
    }
}
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
          <title>LE CALENDRIER</title>
    </head>
    <body>
        <h1>LE TP</h1>
        <div class="jumbotron jumbotron-fluid" style="background-color: purple">
            <div class="container">
                <h2 class="display-6" style="background-color:pink ; text-align:center">LE CALENDRIER</h2>
            </div>
        </div>
        <main class="d-flex flex-column align-items-center p-4 bg-light rounded">
            <form class="form-inline mb-4" action="#" method="post">
                <div class="form-group mr-2">
                    <select id="month" class="custom-select" name="month">
                        <option value="1">Janvier</option>
                        <option value="2">Février</option>
                        <option value="3">Mars</option>
                        <option value="4">Avril</option>
                        <option value="5">Mai</option>
                        <option value="6">Juin</option>
                        <option value="7">Juillet</option>
                        <option value="8">Aout</option>
                        <option value="9">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                    </select>
                </div>
                <div class="form-group mr-2">
                    <select id="year" class="custom-select" name="year">
                        <?php
                        for ($yearSelect = 1970; $yearSelect <= 2030; $yearSelect++) {
                            echo '<option value="' . $yearSelect . '">' . $yearSelect . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <input class="btn btn-outline-dark" type="submit" value="Envoyer" />
            </form>
        <div class="container">
           <div class="row justify-content-center">
        <table class="table table-dark">
            <tr scope="col">
                <td colspan="7" align="center"><a href="calendrier.php?mois=<?php echo $nbMonth - 1; ?>&amp;annee=<?php echo $nbYear; ?>"><<</a>&nbsp;&nbsp;<?php echo $tab_mois[$nbMonth]; ?>&nbsp;&nbsp;<a href="calendrier.php?mois=<?php echo $nbMonth + 1; ?>&amp;annee=<?php echo $nbYear; ?>">>></a></td>
            </tr>
            <tr scope="col">
                <td colspan="7" align="center"><a href="calendrier.php?mois=<?php echo $nbMonth; ?>&amp;annee=<?php echo $nbYear - 1; ?>"><<</a>&nbsp;&nbsp;<?php echo $nbYear; ?>&nbsp;&nbsp;<a href="calendrier.php?mois=<?php echo $nbMonth; ?>&amp;annee=<?php echo $nbYear + 1; ?>">>></a></td>
            </tr>
            <?php
            //on fout des bloucles dans le tableau pour afficher les jours 
            echo'<tr>';
            for ($i = 1; $i <= 7; $i++) {
                echo('<td>' . $tab_jours[$i] . '</td>');
            }
            echo'</tr>';

            for ($i = 0; $i < 6; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 7; $j++) {
                    echo "<td" . (($nbMonth == date("n") && $nbYear == date("Y") && $tab_cal[$i][$j] == date("j")) ? ' style="color: #FFFFFF; background-color: #000000;"' : null) . ">" . ((strpos($tab_cal[$i][$j], "*") !== false) ? '<font color="#aaaaaa">' . str_replace("*", "", $tab_cal[$i][$j]) . '</font>' : $tab_cal[$i][$j]) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        </div>
        </div>
    </body>
</html>

