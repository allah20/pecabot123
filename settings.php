<?php


session_start();
$host="localhost";
$dbUser="root";
$dbPass = "";
$dbName= "login";

$dbConn = mysqli_connect($host,$dbUser,$dbPass,$dbName);



if(mysqli_connect_errno()){

    echo "Adatbázis kapcsolodási hiba: ".mysqli_connect_error();
    exit();
}

?>