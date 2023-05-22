<?php
/* just the basic login via php without safe transfer bc idc about safety it */
 //Connect yallah
    $_SERVER = "panel.act-gaming.de:3306"; //Verbindung zu jonathans panel und dem server
    $user = "u28_DyMoTwUVAJ";
    $pass = "Pzn^3WcGa39^kwKlI8mksT@1";
    $db = "s28_project";
    $con = mysqli_connect($_SERVER, $user, $pass);
	mysqli_select_db($con, $db);
	$sql = "SELECT * FROM Account";
	$erg = mysqli_query($con, $sql);
	$var = mysqli_fetch_assoc($erg);
	
	while ($row = mysqli_fetch_assoc($erg)){
        	echo $row["Acc_ID"]. " ".
                 $row["Username"]." ".
                 $row["E_Mail"] ." ".
        		 $row["Passwd"]."<br>";
        }
// ganzen posts einmal in eine Variable speichern ist vermutlich besser so
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    //$Remember = $_POST["Remember"];

    mysqli_select_db($con, $db);
    $EMailAbfrage = "SELECT * FROM Account WHERE Acc_ID=1";
    $erg = mysqli_query($con, $EMailAbfrage);
	//$erg = 1;

    if ($erg["Acc_ID"] == 1){
        echo "jo";
        print "".$erg."";
        /*
        $getPasswort = "SELECT Passwd FROM Account WHERE Username = ''$email'";
        $erg = mysqli_query($con, $getPasswort);
        $var = mysqli_fetch_assoc($erg);
        if ($password == $erg){
         //login = true
        }
        else{
            //login = false
        }*/
    }
    else{
        //print("Wir finden diesen Benutzernamen nicht nimm doch mal den richtigen");
        print "test".$erg."";
    }
?>