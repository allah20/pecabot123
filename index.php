<?php


include("settings.php");

if(isset($_SESSION['user'])){
    $tittle ="Dashboard";
    }else{
        $tittle = "Belépés";
    }

include("header.php");

if(isset($_SESSION['user'])){
include("dashboard.php");

}else{

include("login.php");

}

include("footer.php");


?>