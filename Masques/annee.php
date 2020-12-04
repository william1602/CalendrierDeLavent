<?php
session_start();

$_SESSION['annee']--;

header("Location: main.php");