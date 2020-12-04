<?php

session_start();
?>

<html lang="en">
<head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style_trouve.css" />
    <title>Récapitulatif</title>
</head>
<body>

    <table>
        <caption>Ou en êtes-vous? </caption>

        <thead>
            <tr>
                <th>Numéro du masque</th>
                <th>Etat</th>
            </tr>
        </thead>
        <tbody>
<?php
for($i=1;$i<=24;$i++)
{
    ?>
    <tr>
    <td><img class="img_masque" src="<?php echo './img/Masque'. $i . '.png' ;?>" alt="Masque"/></td>
        <?php
        if(($_SESSION['masque' . $i]) == 0){
            ?>
            <td><img class="img_cadenas_ferme" src="./img/cadenas_ferme.jpg" alt="Fermé"/></td>
        <?php
        }else{
            ?>
            <td><img class="img_cadenas_ouvert" src="./img/cadenas_ouvert.jpg" alt="Ouvert"/></td>
            <?php
        }
        ?>

    </tr>
<?php
}
?>


        </tbody>
    </table>
</body>
</html>