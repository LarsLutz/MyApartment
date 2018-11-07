<?php
   
 error_reporting(E_ALL);
    $MYSQL_HOST = 'localhost';
    $MYSQL_USER = 'root';
    $MYSQL_PASS = '';
    $MYSQL_DATA = 'myapartment_db';

    $connid = mysqli_connect($MYSQL_HOST, $MYSQL_USER,$MYSQL_PASS,$MYSQL_DATA) OR die("Error: ". mysqli_error());
    //mysqli_select_db($connid,$MYSQL_DATA) OR die("Error: ".mysqli_error($connid));
   

    // Session starten
    session_start();
   
	function doLogin($ID, $Autologin)
    {
            include_once 'db.php';
        // Die aktuelle SessionID wird in der DB gespeichert.
        $sql = "UPDATE
                        user
                SET
                        sessionid = '".mysqli_real_escape_string($connid,session_id())."',
                        autologin = NULL,
                        ip = '".$_SERVER['REMOTE_ADDR']."',
                        lastaction = '".mysqli_real_escape_string($connid,time())."',
                        lastlogin = '".mysqli_real_escape_string($connid,time())."' 
                WHERE
                        id = '".$ID."'
                ";
        mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());        
        // Wenn 'autologin aktiviert wurde
        if($Autologin){
            // Zufallscode erzeugen
            $part_one = substr(time()-rand(100, 100000),5,10);
            $part_two = substr(time()-rand(100, 100000),-5);
            $Login_ID = md5($part_one.$part_two);
            // Code im Cookie speichern, 10 Jahre
            setcookie("autologin", $Login_ID, time()+60*60*24*365*10);
            $sql = "UPDATE
                            user
                    SET
                            autologin = '".$Login_ID."'
                    WHERE
                            id = '".$ID."'
                   ";
            mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
           
        }

        // Daten des Users in der Session speichern
        $sql = "SELECT
                        username
                FROM
                        user
                WHERE
                        id = '".$ID."'
               ";
        $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());

        $row = mysqli_fetch_assoc($result);
        $_SESSION['UserID'] = $ID;
        $_SESSION['username'] = $row['username'];
        $_SESSION['ErrorMSG']= "";
    }

   
    if(isset($_POST['submit']) AND $_POST['submit']=='Login!'){
        // Falls der Nickname und das Passwort übereinstimmen..
        echo 'SQL UN PW';
        $sql = "SELECT
                        id
                FROM
                        user
                WHERE
                        username = '".(trim($_POST['username']))."' AND
                        passwort = '".md5(trim($_POST['password']))."'
               ";
        $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
        // wird die ID des Users geholt und der User damit eingeloggt
        $row = mysqli_fetch_assoc($result);
        // Prüft, ob wirklich genau ein Datensatz gefunden wurde
        if (mysqli_num_rows($result)==1){
             doLogin($row['id'], isset($_POST['autologin']));
            header("location: index.php"); 
        }
        else{ 
            echo "fail";
 
header("location: loginfail.php");
}
}

echo 'ende';

include_once 'dbclose.php';

?>

