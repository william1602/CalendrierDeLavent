
<?php

    session_start();

    if (!empty($_POST['date_du_jour']))
    {
        $champs_dates = explode("-",$_POST['date_du_jour']);
        $_SESSION['annee'] = $champs_dates[0];
        $_SESSION['mois'] = $champs_dates[1];
        $_SESSION['jour'] = $champs_dates[2];
    }

    if (!empty($_POST['date_du_jour'])){
        $_SESSION['nombreRandom'] = rand(0,100);
        $_SESSION['masque1'] = 0;
        $_SESSION['masque2'] = 0;
        $_SESSION['masque3'] = 0;
        $_SESSION['masque4'] = 0;
        $_SESSION['masque5'] = 0;
        $_SESSION['masque6'] = 0;
        $_SESSION['masque7'] = 0;
        $_SESSION['masque8'] = 0;
        $_SESSION['masque9'] = 0;
        $_SESSION['masque10'] = 0;
        $_SESSION['masque11'] = 0;
        $_SESSION['masque12'] = 0;
        $_SESSION['masque13'] = 0;
        $_SESSION['masque14'] = 0;
        $_SESSION['masque15'] = 0;
        $_SESSION['masque16'] = 0;
        $_SESSION['masque17'] = 0;
        $_SESSION['masque18'] = 0;
        $_SESSION['masque19'] = 0;
        $_SESSION['masque20'] = 0;
        $_SESSION['masque21'] = 0;
        $_SESSION['masque22'] = 0;
        $_SESSION['masque23'] = 0;
        $_SESSION['masque24'] = 0;
    }
?>

<html lang="en">
<head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style_main.css" />
    <title>Fenêtre principale</title>
</head>
<body>

<header>

    <?php
        if ($_POST['gerer'] == 'Afficher'){
            echo '<table>';
        }
        else{
            echo '<table hidden>';

        }
        ?>

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
                if($_SESSION['masque' . $i] == 0){
                    if ($i == 15){
                        ?>
                        <td><a href="reussite.php?id='<?php echo $i;?>"><img class="img_cadenas_ferme" src="./img/cadenas_ferme.jpg" alt="Fermé"/></a></td>
                        <?php
                    }
                    else {
                        ?>
                        <td ><img class="img_cadenas_ferme" src = "./img/cadenas_ferme.jpg" alt = "Fermé" /></td >
                        <?php
                    }
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

    <?php
        if ($_SESSION['masque1'] == 1 && $_SESSION['masque2'] == 1 && $_SESSION['masque2'] == 1
            && $_SESSION['masque3'] == 1 && $_SESSION['masque4'] == 1 && $_SESSION['masque5'] == 1
            && $_SESSION['masque6'] == 1 && $_SESSION['masque7'] == 1 && $_SESSION['masque8'] == 1
            && $_SESSION['masque9'] == 1 && $_SESSION['masque10'] == 1 && $_SESSION['masque22'] == 1
            && $_SESSION['masque23'] == 1 && $_SESSION['masque24'] == 1){
            header("Location: gagne.php");
        }
    ?>

    <h1>Trouvez les 24 masques</h1>

    <em id="resultats">Résultats</em>
    <br/>
    <form method="post" action="main.php">
        <input type="submit" name="gerer" value="Fermer"/>
        <input type="submit" name="gerer" value="Afficher"/>
    </form>


    <h2>Technique infaillible... Mais pas digne d'un programmeur courageux</h2>
    <p id="intro"><em>Lorsque vous trouverez le lien vers la page réussite, dans l'url, inscrivez id=7 (ou numéro du jeu si vous ne trouvez pas la solutoin</em></p>


    <?php
    if ($_SESSION['masque1'] == 0){
    ?>
        <form method="post" action="main.php">
            <fieldset>
                <legend>DATE</legend>
            <label for="date_du_jour">Entrez la date du jour : </label>
            <input type="date" name="date_du_jour" id="date_du_jour"/>
            <input type="submit" value="Tester"/>
            </fieldset>
        </form>
    <?php
        echo '<p id="print_date">Date du jour : ';

        if ($_SESSION['jour'] > 0){
            echo '<a class="date" href="jour.php">' . $_SESSION['jour'] . '/</a>';
        }
        else
        {
            echo '00/';
        }
        if ($_SESSION['mois'] > 0){
            echo '<a class="date" href="mois.php">' . $_SESSION['mois'] . '/</a>';
        }
        else
        {
            echo '00/';
        }
        if ($_SESSION['annee'] > 1980){
            echo '<a class="date" href="annee.php">' . $_SESSION['annee'] . '</a>';
        } elseif(($_SESSION['annee'] > 1980))
        {
            echo '<em>' . 'Ne vous inquiétez pas, vous ne cliquerez pas toute la journée' . '</em>';
        }
        else
        {
            echo '1980';
        }

        if ($_SESSION['jour'] == 0 && $_SESSION['mois'] == 0 && $_SESSION['annee'] == 1978 && $_SESSION['masque1'] == 0) {
            header("Location: ./reussite.php?id=1");
        }
        echo '</p>';
    }
    ?>

</header>

<section>
    <?php
    if ($_SESSION['masque2'] == 0){
    ?>

    <form method="post" action="main.php">
        <fieldset>
            <legend>QUESTION 1</legend>
            <label for="reponse1">Où partent en vacances les geeks? Au ... </label>
            <input type="text" name="reponse1" id="reponse1"/>
            <input type="submit" value="Tester"/>
            <br/><em>Pensez à un langage de programmation</em>
        </fieldset>
    </form>
    <?php

        if (strcmp(strtoupper($_POST['reponse1']),'C-SHELL') == 0){
            header("Location: ./reussite.php?id=2");
        }
    }
    ?>

    <?php
    if ($_SESSION['masque3'] == 0){
        ?>

        <form method="post" action="main.php">
            <fieldset>
                <legend>QUESTION 2</legend>
                <label for="reponse2">Traduction de 夜の情報 ? </label>
                <input type="text" name="reponse2" id="reponse2"/>
                <input type="submit" value="Tester"/>
            </fieldset>
        </form>
        <?php

        if (strcmp(strtoupper($_POST['reponse2']),'NUIT INFO') == 0){
            header("Location: ./reussite.php?id=3");
        }
    }
    ?>

    <?php
    if ($_SESSION['masque4'] == 0){
        ?>

        <form method="post" action="main.php">
            <fieldset>
                <legend>PLUS OU MOINS (entre 0 et 100)</legend>
                <label for="reponse3">Choisir un nombre </label>
                <input type="text" name="reponse3" id="reponse3"/>
                <input type="submit" value="Tester"/><br/>
                <?php
                if(!empty($_POST['reponse3'])) {
                    if ($_POST['reponse3'] == $_SESSION['nombreRandom']) {
                        header("Location: ./reussite.php?id=4");
                    } elseif ($_POST['reponse3'] < $_SESSION['nombreRandom'] && ($_POST['reponse3']>0 && $_POST['reponse3']<100)) {
                        echo '<strong>C\'est plus</strong>';
                    } else {
                        echo '<strong>C\'est moins</strong>';
                    }
                }
                ?>
            </fieldset>
        </form>
<?php
    }
    if($_SESSION['masque5']==0)
    {
    ?>
        <h2>Cherchez l'intrus</h2>
        <div id="seek_intrus">
            <?php
            for ($j=0;$j<15;$j++) {
                for ($i = 0; $i < 100; $i++) {
                    echo '0';
                }
                echo '<br/>';
            }
            for ($i = 0; $i < 58; $i++) {
                echo '0';
            }
            echo '<a id="intrus" href="reussite.php?id=5">' . 'o' . '</a>';
            for ($i = 0; $i < 41; $i++) {
                echo '0';
            }
            echo '<br/>';
            for ($j=0;$j<17;$j++) {
                for ($i = 0; $i < 100; $i++) {
                    echo '0';
                }
                echo '<br/>';
            }
            ?>
        </div>




<?php
    }
?>
    <?php
    if ($_SESSION['masque23'] ==0){
    ?>
        <p id="masque23"><a href=""><img id="masque23" src="./img/Masque23.png" alt="Masque23"/></a></p>
    <?php
    }
    if ($_SESSION['masque6'] ==0){
?>



<h2>Trouvez la "Technology & Strategy" à partir<br/> d'une chaîne de caractère pour atteindre le masque n°8</h2>
        <p><em>
                Z : Nord, D : Est, Q : Ouest, S : Sud<br/>
            Ne pas entrer 'DD' pour se déplacer de deux cases à droite, la flèche continuera avant de se cogner contre un mur.
            </em></p>
    <form method="post" action="main.php">
        <fieldset>
            <legend>Le labyrinthe</legend>
            <img src="./img/labyboul.png" alt="Le labyrinthe"/><br/>
            <label for="codeMasque8">Votre code </label>
            <input type="text" name="codeMasque8" id="codeMasque8"/>
            <input type="submit" value="Tester"/>
        </fieldset>
    </form>
<?php
        if (strcmp(strtoupper($_POST['codeMasque8']), 'DBDHDBDHDHD') == 0)
        {
            header("Location: ./reussite.php?id=6");
        }
    }
?>

    <?php
    if ($_SESSION['masque7'] ==0){
    ?>
        <form method="post" action="main.php">
            <fieldset>
                <legend>Un peu de réflexion</legend>
                Sachant que (n+1)² = (n)² + 2n + 1<br/><br/>
                <label for="calcul">21² = </label>
                <input type="text" name="calcul" id="calcul"/>
                <input type="submit" value="Tester"/>
            </fieldset>
        </form>
    <?php
        if ($_POST['calcul'] == 441)
        {
            header("Location: ./reussite.php?id=7");
        }
    }
    ?>

    <?php
    if ($_SESSION['masque8'] ==0){
        ?>
        <form method="post" action="main.php">
            <fieldset>
                <legend>Connaissez-vous bien votre entreprise?</legend>
                <label for="date_creation">Année de création de T & S = </label>
                <input type="text" name="date_creaation" id="date_creation"/>
                <input type="submit" value="Soumettre"/>
            </fieldset>
        </form>
        <?php
        if ($_POST['date_creation'] == 2008)
        {
            header("Location: ./reussite.php?id=8");
        }
    }
    ?>

    <?php
    if ($_SESSION['masque9'] ==0) {
        echo '<a id="blanc" href="reussite.php?id=9">InvisibleInvisibleInvisibleInvisibleInvisibleInvisibleInvisibleInvisibleInvisibleInvisible</a>';
    }
    ?>

    <h2>Une image peut-elle en cacher une autre?</h2>

    <?php
    if ($_SESSION['masque10'] ==0) {
        if ($_POST['echanger'] == "Changer"){
            ?>
            <style>
                #masque10
                {
                    z-index:4;
                }
            </style>
                <?php
        }
        ?>

        <div id="masque10">
            <a href="reussite.php?id=10"><img src="./img/Masque10_petit.png" alt="Masque 10" /></a>
        </div>
        <div id="poudre">
            <img src="./img/poudre.jpeg" alt="Poudre" />
        </div>
        <br/>

        <form method="post" action="main.php">
            <input type="submit" name="echanger" value="Changer"/>
        </form>
        <?php

    }
    ?>


    <?php
    if ($_SESSION['masque22'] ==0){
    ?>
        <h2>Trouvez le masque dans le "Où est Charlie"? </h2>
        <div id="container" >
            <img id="charlie" src="./img/ou_est_charlie.jpg" alt="Ou est Charlie?">
            <a href="reussite.php?id=22"><img id="masque22" src="./img/Masque22.png" alt="Masque 22"></a>
        </div>
    <?php
    }
    ?>


</section>

<footer>

    <?php
    if ($_SESSION['masque24'] ==0){
        ?>
        <a id="mini" href="reussite.php?id=24">Petit</a>
    <?php
    }
    ?>


</footer>


</body>
</html>
