<?php

    session_start();

    if(!empty($_GET['id']))
    {
    ?>
<html lang="en">
<head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style_reussite.css" />
    <title>Réussite</title>
</head>
<body>

<br/><h1><a href="main.php">Revenir au jeu</a><br/><br/></h1>
<h2>Masque découvert</h2>

<img src='<?php echo './img/Masque'.$_GET['id'] . '.png' ;?>' alt='Masque attendu'/>
<?php
        $_SESSION['masque' . $_GET['id']] = 1;
    }
    ?>

</body>
</html>