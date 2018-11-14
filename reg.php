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

        $sql = "SELECT      id
                        FROM
                               personen
                        WHERE
                               idpersonen = '" .mysqli_real_escape_string($connid,$usrnmr)."'
                ";
        $result = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
        $row = mysqli_fetch_assoc($result);



        if (trim($_POST['usernr']) == '') {
            $errors[] = "Bitte geben Sie Ihre Usernummer ein.";
            $msg = $msg .= "Bitte geben Sie Ihre Usernummer ein.";
        } elseif (trim($_POST['usernr']) != $row['idpersonen']) {
            $errors[] = "Diese UserID ist nicht vorhanden.";
            $msg = $msg .= "Diese UserID ist nicht vorhanden.";
        }
    }
    if (count($errors)) {
        $msg = $msg .= "Ihr Konto konnte nicht erstellt werden.<br>\n";

        $_SESSION['ErrorMSG1'] = $msg;

        foreach ($errors as $error)
            echo $error . "faeheler";
        
         header("location: registrieren.php"); 
        
    }
    
    else {
        $errors = array();
        // Pruefen, ob alle Formularfelder vorhanden sind

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
    }
    if (count($errors)) {

        $msg = $msg . " Ihr Username konnte nicht gespeichert werden.";
        $_SESSION['ErrorMSG3'] = $msg;

        foreach ($errors as $error)
            echo $error . "faeheler";

        header("location: userconf.php");
    } else {
        $name = trim($_POST['newname']);
        $sql = "UPDATE
                                user
                        SET
                                username =  '" . mysqli_real_escape_string($connid, $name) . "'
                              
                        WHERE
                                id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
        mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
        header("location: userconf.php");
    }
}
?>