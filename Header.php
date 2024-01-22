<?php

 session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    
</head>
<body>

    <div class="navbar">
        <li><a class="linkText" href="index.php">Thuis</a></li>
        <li><a class="linkText" href="Taarten.php">Taarten</a></li>

        <?php
        if(isset($_SESSION["gebruikerid"])){
            echo "<li><a class='linkText' href='include/Loguit.inc.php'>Log Uit</a></li>";

        }else{
            echo "<li><a class='linkText' href='Registreer.php'>Registreer</a></li>";
            echo "<li><a class='linkText' href='login.php'>Login</a></li>";
        }
        ?>


    </div>


    
