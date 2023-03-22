<?php
/* just the basic login via php without safe transfer bc idc about safety it */
 //Connect yallah
    $_SERVER = "localhost"; //Verbindung zu jonathans panel und dem server
    $user = "root";
    $pass ="";
    $db = "test";
    $con = mysqli_connect($_SERVER, $user, $pass); //anti fett und hässlich


// ganzen posts einmal in eine Variable speichern ist vermutlich besser so
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    //$Remember = $_POST["Remember"];

    mysqli_select_db($con, $db);
    $EMailAbfrage = "SELECT COUNT(E_Mail) FROM account WHERE E_Mail = '$email'";
    $erg = mysqli_query($con, $EMailAbfrage);
    $var = mysqli_fetch_assoc($erg);

    
    if ($var == 1){
        $getPasswort = "SELECT Passwort FROM account WHERE E_Mail = '$email'";
        $erg = mysqli_query($con, $getPasswort);
        $var = mysqli_fetch_assoc($erg);
        if ($password == $erg){
         //login = true
        }
        else{
            //login = false
        }
    }
    else{
        print("Wir finden diesen Benutzernamen nicht nimm doch mal den richtigen");
    }