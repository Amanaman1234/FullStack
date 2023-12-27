<?php

if(isset($_POST["submit"])){

    $gebruikersnaam = $_POST["gebruikersnaam"];
    $wachtwoord = $_POST["wachtwoord"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($gebruikersnaam,$wachtwoord)){
        header("location: ../login.php?error=emptyinput");
        exit;
    }



   loginUser($conn, $gebruikersnaam, $wachtwoord);


}
else{
    header("location: ../login.php");
    exit();
}