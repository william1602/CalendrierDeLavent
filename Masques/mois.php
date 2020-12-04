<?php
session_start();

$_SESSION['mois']--;

header("Location: main.php");
