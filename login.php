<?php
   
 include 'db.php';
   

    // Session starten
    session_start();
   
	function doLogin($ID, $Autologin)
    {
            include 'db.php';
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
        if($Autologin=="ja"){
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
        $_SESSION['ErrorMSG1']= "";
        $_SESSION['ErrorMSG2']= "";
        $_SESSION['ErrorMSG3']= "";
    }

   
    if(isset($_POST['submit']) AND $_POST['submit']=='Login!'){
        // Falls der Nickname und das Passwort übereinstimmen..
        
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
 
header("location: loginfail.php");
} 
}


include_once 'dbclose.php';

?>

