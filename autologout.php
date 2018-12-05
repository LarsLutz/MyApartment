 <?php
   include_once 'db.php';
   
    
    
   
function doLogin($ID, $Autologin=false)
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
            $Login_ID = hash ( 'ripemd160' , $part_one.$part_two,false );
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
    }
    

    // Prüfen, ob ein Autologin des Users stattfinden muss
    if(isset($_COOKIE['autologin']) AND !isset($_SESSION['UserID'])){
        $sql = "SELECT
                        id
                FROM
                        user
                WHERE
                        autologin = '".mysqli_real_escape_string($connid,$_COOKIE['autologin'])."'
               ";
        $result = mysqli_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) == 1)
            doLogin($row['id'], '1');
    }

    // Online Status der User aktualisieren
    if(isset($_SESSION['UserID'])){
        $sql = "UPDATE
                        user
                SET
                        lastaction = '".time()."'
                WHERE
                        id = '".$_SESSION['UserID']."'
               ";
        mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
    }

    // User ohne Autologin ausloggen
    $sql = "UPDATE
                    user
            SET
                    sessionid = NULL,
                    autologin = NULL,
                    ip = NULL
            WHERE
                    '".(time()-60*20)."' > lastaction AND
                    autologin IS NULL
           ";
    mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());

    // Kontrollieren, ob ein automatisch ausgeloggter User noch eine gültige Session besitzt
    if(isset($_SESSION['UserID'])){
        $sql = "SELECT
                        sessionid
                FROM
                        user
                WHERE
                        id = '".$_SESSION['UserID']."'
               ";
        $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
        $row = mysqli_fetch_assoc($result);
        if(!$row['sessionid']){
        $_SESSION = array();
            session_destroy();
            include_once 'dbclose.php';
        }
    }
?> 

