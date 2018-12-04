<?php

include_once 'db.php';


if (isset($_POST['regok']) AND $_POST['regok'] == 'Registrieren') {
    session_start();
    $msg = "";
    $errors = array();
   
        

    if (!isset($_POST['usernr']) AND ( $_POST['regusername']) AND ( $_POST['regpassword'])AND ( $_POST['regpasswordag'])AND ( $_POST['regemail'])) {
        $errors[] = "Bitte geben sie Ihre Daten ein.";
        $msg = $msg . "Bitte geben sie Ihre Usernummer ein.";
    } else {
       $usrnmr= $_POST['usernr'];

        $sql = "SELECT      idPersonen, Wohnungen_idGebaeude
                        FROM
                               personen
                        WHERE
                               idpersonen = '" .mysqli_real_escape_string($connid,$usrnmr)."'
                ";
        $result = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
        $row = mysqli_fetch_assoc($result);
        $wohnung = $row['Wohnungen_idGebaeude'];


        if (trim($_POST['usernr']) == '') {
            $errors[] = "Bitte geben Sie Ihre Usernummer ein.";
            $msg = $msg .= "Bitte geben Sie Ihre Usernummer ein.";
        } elseif (trim($_POST['usernr']) != $row['idPersonen']) {
            $errors[] = "Diese UserID ist nicht vorhanden.";
            $msg = $msg .= "Diese UserID ist nicht vorhanden.";
        }
    }
    if (count($errors)) {
        $msg = $msg .= "Ihr Konto konnte nicht erstellt werden.<br>\n";

        $_SESSION['ErrorMSG1'] = "<label>".$msg."</label>";

        foreach ($errors as $error)
            echo $error . "faeheler";
        
         header("location: registrieren.php"); 
        
    }
    
    else {
        $errors = array();

        $names = array();
        $sql = "SELECT  username
            
                        FROM
                               user
                       ";
        $result = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
        while ($row = mysqli_fetch_assoc($result))
            $names[] = $row['username'];
      
        

        if (trim($_POST['regusername']) == '') {
            $errors[] = "Bitte geben Sie einen Usernamen ein.";
            $msg = $msg . " Bitte geben Sie Ihren neuen Usernamen ein. \n";
        } elseif (!preg_match('/^[a-zA-ZäöüÄÖÜ]+$/', trim($_POST['regusername']))) {
            $errors[] = "Sie verwenden ungültige Sonderzeichen.";
            $msg = $msg . " Sie verwenden ungültige Sonderzeichen. \n";
        } elseif (in_array(trim($_POST['regusername']), $names) AND trim($_POST['regusername']) != $row['username']) {
            $errors[] = "Dieser Username ist bereits vergeben.";
            $msg = $msg . " Dieser Username ist bereits vergeben. \n";
        }
        
        if(trim($_POST['regpassword'])==""){
                    $errors[]= "Bitte geben Sie Ihr Passwort ein.";
                    $msg= $msg." Bitte geben Sie Ihr neues Passwort ein. <br>";
                }
                elseif(strlen(trim($_POST['regpassword'])) < 6){
                    $errors[]= "Ihr Passwort muss mindestens 6 Zeichen lang sein.";
                    $msg= $msg." Ihr Passwort muss mindestens 6 Zeichen lang sein. <br>";
                }
                if(trim($_POST['regpasswordag'])==""){
                    $errors[]= "Bitte wiederholen Sie Ihr Passwort.";
                    $msg= $msg." Bitte wiederholen Sie Ihr Passwort. <br>";
                }
                elseif(trim($_POST['regpassword']) != trim($_POST['regpasswordag'])){
                    $errors[]= "Ihre Passwortwiederholung war nicht korrekt.";
                    $msg= $msg." Ihre Passwortwiederholung war nicht korrekt. <br>";
                }
                
                $emails = array();
                $sql = "SELECT
                               email
                        FROM
                               user
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                while($row = mysqli_fetch_assoc($result))
                    $emails[] = $row['email'];
                
                if(trim($_POST['regemail'])==''){
                    $errors[]= "Bitte geben Sie Ihre Email-Adresse ein.";
                    $msg= $msg." Bitte geben Sie Ihre Email-Adresse ein. \n";
                }
                elseif(!preg_match('?^[\w\.-]+@[\w\.-]+\.[\w]{2,4}$?', trim($_POST['regemail']))){
                    $errors[]= "Die Syntax Ihrer E-Mail Adresse ist falsch.";
                    $msg= $msg." Die Syntax Ihrer E-Mail Adresse ist falsch. \n";
                }
                elseif(in_array(trim($_POST['regemail']), $emails) AND trim($_POST['regemail'])!= $row['email']){
                    $errors[]= "Diese Email-Adresse ist bereits vergeben.";
                    $msg= $msg." Diese Email-Adresse ist bereits vergeben. \n";
                    
                }
        
        
    }
    if (count($errors)) {

        $msg = $msg . " Ihr Username konnte nicht gespeichert werden.";
        $_SESSION['ErrorMSG2'] = "<label>".$msg."</label>";

        foreach ($errors as $error)
            echo $error . "faeheler";

        header("location: registrieren.php");
    } else {
        $name = trim($_POST['regusername']);
        $regpw = sha1(trim($_POST['regpassword']));
        $regmail= trim($_POST['regemail']);
           
        
         $sql = "INSERT INTO user (username,passwort,email,reg_datum,wohnung)
		VALUES ('".mysqli_real_escape_string($connid, $name)."','".mysqli_real_escape_string($connid, $regpw)."','".mysqli_real_escape_string($connid, $regmail)."','".time()."','".mysqli_real_escape_string($connid, $wohnung)."'
		)";
          mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
        
        header("location: registrieren.php");
    }
    
    
}

include_once 'dbclose.php';
?>