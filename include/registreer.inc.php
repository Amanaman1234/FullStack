<?php
if(isset($_POST["submit"])){
    $naam = $_POST["naam"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    $repWachtwoord = $_POST["repWachtwoord"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($naam,$gebruikersnaam,$email,$wachtwoord,$repWachtwoord) !== false){
        header("location: ../registreer.php?error=emptyinput ");
        exit();
   }

   if(uidNameLength($gebruikersnaam)){
    header("location: ../registreer.php?error=toolung");
    exit();
   }

   if(invalidgebruikersnaam($gebruikersnaam) !== false){
    header("location: ../registreer.php?error=invalidusername ");
    exit();
}

    if (pwdMatch($wachtwoord, $repWachtwoord)!== false) {
        header("location: ../registreer.php?error=pwdsdontmatch");
        exit();
    }

    if(uidExists($conn, $gebruikersnaam, $email) !== false){
        header("location: ../registreer.php?error=gebruikersnaamgebruikt");
        exit();
    }




   createUser($conn,$naam, $email, $gebruikersnaam , $wachtwoord );


}
else{
    header("location ../registreer.php");
    exit();
}