<?php
    $_SERVER = "localhost";
    $user="root";
    $pass = "";
    $db = "obstladen";
    $con = mysqli_connect($_SERVER, $user, $pass);

    $vorn = $_POST["vname"];
    $nach = $_POST["nname"];
    $ort = $_POST["Wohnort"];
    $sorten = $_POST["Sorte"];
    $mengen = $_POST["Menge"];
    $id = 1;
    mysqli_select_db($con, $db);

    $sql = "INSERT INTO bestellungen VALUES ('$id', '$vorn','$nach', '$ort', '$sorten', '$mengen')";
    $id = $id + 1;
    mysqli_query($con, $sql);

    $sqlSelectAll = "SELECT * FROM bestellungen";
    $ergebnis = mysqli_query($con, $sqlSelectAll);
    while ($row = mysqli_fetch_assoc($ergebnis)){
        echo $row["Vorname"]." ".
             $row["Nachname"]." ".
             $row["Ort"]." ".
             $row["Sorte"]." ".
             $row["Menge"]."<br>";



    }


?>