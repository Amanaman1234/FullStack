<?php
$servername= "localhost";
$username= "root";
$password="";
$dbname="fullstack";

$conn = mysqli_connect($servername,$username, $password, $dbname );

If(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}