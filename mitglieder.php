<?php
$_SERVER = "localhost";
$user = "root";
$pass = "";
$db = "FormularFMitglieder";
$con = mysqli_connect($_SERVER, $user, $pass);
mysqli_select_db($con, $db);

/*variables declared from html */
$persnr = $_POST["persnr"];
$fnummer = $_POST["fnummer"];
$vname = $_POST["vname"];
$verwand = $_POST["verwand"];
$zuschuss = $_POST["zuschuss"];

$sql = "INSERT INTO fmitglieder (Persnr, Fmnr, Vorname, Vwgrad, Zuschlag) VALUES ('$persnr', '$fnummer', '$vname', '$verwand', '$zuschuss')";
$erg = mysqli_query($con, $sql);

$sql = "Select vorname from fmitglieder where vwgrad = '$verwand'";
$erg = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($erg)){
    echo $row["vorname"] . " <br>" ;
}