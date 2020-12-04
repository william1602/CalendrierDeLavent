<?php
    session_start();

    $_SESSION['jour']--;

    header("Location: main.php");