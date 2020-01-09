<?php
    include_once "follow.php";
    $bdd = new PDO('mysql:host=localhost;dbname=devils;charset=utf8', 'root', '');

    if (isset($_SESSION["pseudo"])) {
        header("Location: profil.php?id=".$_SESSION["id"]);
    } else {
        session_start();
    }
