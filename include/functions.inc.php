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