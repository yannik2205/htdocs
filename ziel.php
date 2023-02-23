<?php
    $_SERVER = "localhost";
    $user="root";
    $pass = "";
    $db = "ObstLaden";

    //$ID = $_POST["ID"];
    $vorn = $_POST["vname"];
    $nach = $_POST["nname"];
    //$ort = 


    $con = mysqli_connect($_SERVER, $user, $pass);
    mysqli_select_db($con, $db);

    $sql = "INSERT INTO tabelle_adre VALUES ('$vorn','$nachn')";
?>