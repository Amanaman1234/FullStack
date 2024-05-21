<?php

if (isset($_POST["BESTEL"])) {

    $adres = $_POST["adres"];
    $postcode = $_POST["postcode"];
    $telefoon = $_POST["telefoon"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';



    Bestel($conn, $adres, $postcode, $telefoon);
}
