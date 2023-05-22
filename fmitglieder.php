<?php

$_SERVER = "localhost";
$UwUser = "root";
$passUwU = ""; 
$dbeow = "FormularFMitglieder";
$coneow = mysqli_connect($_SERVER, $UwUser, $passUwU);
mysqli_select_db($coneow, $dbeow);

$Persneowmer = $_POST["PersNr"];
$Fmneowmer = $_POST["FmNr"];
$Meowname = $_POST["Vorname"];
$VMeowgrade = $_POST["VWGrad"];
$zuschlagfürKatzenfutter = $_POST["Zuschlag"];

$sql = "INSERT INTO fmitglieder (Persnr, Fmnr, Vorname, Vwgrad, Zuschlag) VALUES ('$Persneowmer', '$Fmneowmer', '$Meowname', '$VMeowgrade', '$zuschlagfürKatzenfutter')";
$ergInserten = mysqli_query($coneow, $sql);

$sql = "SELECT Vorname FROM fmitglieder WHERE VwGrad = '$VMeowgrade'";
$ergSelect = mysqli_query($coneow, $sql);
$var = mysqli_fetch_array($ergSelect);

while ($row = mysqli_fetch_array($ergSelect)){
    echo $row["Vorname"];
}
