<?php
include_once 'db.php';


if(isset($_POST['pwok']) AND $_POST['pwok'] == 'Ok') {
    session_start();
    $msg="";
   
            $errors=array();
            // Altes Passwort zum Vergleich aus der Datenbank holen
            $sql = "SELECT
                        passwort
                    FROM
                        user
                    WHERE
                        id = '".$_SESSION['UserID']."'
                   ";
            $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
            $row = mysqli_fetch_assoc($result);
            if(!isset( $_POST['passwordold'],
                       $_POST['passwordnew'],
                       $_POST['passwordnewag']
                      ))
            {
                $errors[]= "Bitte füllen sie alle Felder aus.";
                $msg= $msg." Bitte füllen sie alle Felder aus. <br>";
            }

            else {
                if(trim($row['passwort']) != md5(trim($_POST['passwordold'])))
                    $errors[]= "Ihr altes Passwort ist nicht korrekt.";
                    $msg= $msg." Ihr altes Passwort ist nicht korrekt. <br>";
                if(trim($_POST['passwordnew'])==""){
                    $errors[]= "Bitte geben Sie Ihr Passwort ein.";
                    $msg= $msg." Bitte geben Sie Ihr neues Passwort ein. <br>";
                }
                elseif(strlen(trim($_POST['passwordnew'])) < 6){
                    $errors[]= "Ihr Passwort muss mindestens 6 Zeichen lang sein.";
                    $msg= $msg." Ihr Passwort muss mindestens 6 Zeichen lang sein. <br>";
                }
                if(trim($_POST['passwordnewag'])==""){
                    $errors[]= "Bitte wiederholen Sie Ihr Passwort.";
                    $msg= $msg." Bitte wiederholen Sie Ihr Passwort. <br>";
                }
                elseif(trim($_POST['passwordnew']) != trim($_POST['passwordnewag'])){
                    $errors[]= "Ihre Passwortwiederholung war nicht korrekt.";
                    $msg= $msg." Ihre Passwortwiederholung war nicht korrekt. <br>";
                }
                // Kontrolle des alten Passworts
                
            }
            if(count($errors)){
                echo "Ihr Passwort konnte nicht gespeichert werden.<br>\n".
                     "<br>\n";
                $msg= $msg." Ihr Passwort konnte nicht gespeichert werden.";
                $_SESSION['ErrorMSG1']=$msg;
                
                 foreach($errors as $error)
                     echo $error."faeheler";
                 
                header("location: userconf.php");
                 
            }
            else{
                $sql = "UPDATE
                                user
                        SET
                                passwort ='".md5(trim($_POST['passwordnew']))."'
                        WHERE
                                id = '".$_SESSION['UserID']."'
                       ";
                mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                header("location: userconf.php"); 
            }
        }
        include_once 'dbclose.php';
?>


