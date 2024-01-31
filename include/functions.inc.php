<?php

function emptyInputSignup($naam,$gebruikersnaam,$email,$wachtwoord,$repWachtwoord){
    if(empty($naam) || empty($gebruikersnaam) || empty($email)  || empty($wachtwoord) ||empty($repWachtwoord)){
        return true;
    }
    else{
        return false;
    }
}

function emptyInputLogin($gebruikersnaam,$wachtwoord){
    if(empty($gebruikersnaam) || empty($wachtwoord)){
        return true;
    }
    else{
        return false;
    }
}

function uidNameLength($gebruikersnaam) {
    if(strlen($gebruikersnaam) >= 21) {
        return true;
    }else{
        return false;
    }
    
}

function invalidgebruikersnaam($gebruikersnaam){
    if(!preg_match("/^[a-zA-Z0-9]*$/", $gebruikersnaam)){
        return true;
    }
        else{
            return false;
        }
}

function pwdMatch($wachtwoord, $repWachtwoord){
    if($wachtwoord !==  $repWachtwoord){
        return true;
    }else{
        return false;
    }
}

function uidExists($conn, $gebruikersnaam, $email){
    $sql = "SELECT * FROM gebruikers WHERE Gebruikersnaam = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../registreer.php?error=stmtfailed");
       exit();
    }

mysqli_stmt_bind_param($stmt, "ss", $gebruikersnaam, $email);
mysqli_stmt_execute($stmt);


$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)){
    return $row;
}else{
    $result = false;
    return $result;
}

mysqli_stmt_close($stmt);
}


function createUser($conn,$naam, $email, $gebruikersnaam , $wachtwoord ){
    $sql = "INSERT INTO gebruikers (Naam, Email, Gebruikersnaam, Wachtwoord	) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../registreer.php?error=stmtfailed");
       exit();
    }

$hashedPwd = password_hash($wachtwoord, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, "ssss", $naam, $email, $gebruikersnaam, $hashedPwd);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("location:../registreer.php?error=none");

}

function loginUser($conn, $gebruikersnaam, $wachtwoord){
    $uidExists = uidExists($conn, $gebruikersnaam, $gebruikersnaam);

    if($uidExists == false){
        header("location: ../Login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["Wachtwoord"];

    $checkPwd = password_verify($wachtwoord, $pwdHashed);
    if($checkPwd === false){
        header("location: ../Login.php?error=wronglogin");
        exit();
    }else if($checkPwd === true){
        session_start();
        $_SESSION["gebruikerid"] = $uidExists["GebruikerId"];
        $_SESSION["gebruikersnaam"] = $uidExists["Gebruikersnaam"];
        header("location: ../index.php");
        exit();
    }
}

function checktaart(){
    switch (isset($_GET["smaak"])){

        case $_GET["smaak"] == "appel":
            echo "<img class='taart' src='img/Apel.jpg'>
            </section>
            <section>
                <div class='orderBox'>
                    <h1>Appel</h1>
                    <h1>$5</h1>";
            break;

        case $_GET["smaak"] == "chocolade":
              echo "<img class='taart' src='img/chocoladetaart-met-karamelmousse-en-koffie-ganache-1.jpg'>
              </section>
              <section>
                  <div class='orderBox'>
                      <h1>Chocolade</h1>
                      <h1>$10</h1>";
              break;

        case $_GET["smaak"] == "moka":
            echo "<img class='taart' src='img/Moka.jpg'>  
              </section>
            <section>
                <div class='orderBox'>
                    <h1>Mokka</h1>
                    <h1>$15</h1>";
            break;
            
        case $_GET["smaak"] == "minecraft":
            echo "<img class='taart' src='img/Minecraft.jpg'>
            </section>
            <section>
                <div class='orderBox'>
                    <h1>Minecraft</h1>
                    <h1>$20</h1>";
            break;

        case $_GET["smaak"] == "spongebob":
            echo "<img class='taart' src='img/Spongebob.jpg'>
            </section>
            <section>
                <div class='orderBox'>
                    <h1>Spongebob</h1>
                    <h1>$100</h1>";
                    
                    
            break;

        case $_GET["smaak"] == "fortnite":
             echo "<img class='taart' src='img/fortnite.jpg'>
             </section>
             <section>
                 <div class='orderBox'>
                     <h1>Fortnite</h1>
                     <h1>$1000</h1>";
             break;
    }
}
