<?php

include_once 'db.php';

    
	
        if(isset($_POST['nameok']) AND $_POST['nameok']=='Ok'){
            session_start();
            $msg="";
            $errors = array();
            // Pruefen, ob alle Formularfelder vorhanden sind
            if(!isset($_POST['newname'])){
                
                $errors = "Bitte f&uuml;llen sie alle Formularfelder aus.";
                $msg= $msg." Bitte f&uuml;llen sie alle Formularfelder aus. \n";
            }
            else{
                $names = array();
                $sql = "SELECT
                               username
                        FROM
                               user
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                while($row = mysqli_fetch_assoc($result))
                    $names[] = $row['username'];
                // momentane Email-Adresse ausfiltern
                $sql = "SELECT
                               username
                        FROM
                               user
                        WHERE
                               id = '".mysqli_real_escape_string($connid,$_SESSION['UserID'])."'
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $row = mysqli_fetch_assoc($result);

                if(trim($_POST['newname'])==''){
                    $errors[]= "Bitte geben Sie Ihre Email-Adresse ein.";
                    $msg= $msg." Bitte geben Sie Ihren neuen Usernamen ein. \n";
                }
                elseif(!preg_match('/^[0-9a-zA-ZäöüÄÖÜ]+$/', trim($_POST['newname']))){
                    $errors[]= "Sie verwenden ungültige Sonderzeichen.";
                    $msg= $msg." Sie verwenden ungültige Sonderzeichen. \n";
                }
                elseif(in_array(trim($_POST['newname']), $names) AND trim($_POST['newname'])!= $row['username']){
                    $errors[]= "Dieser Username ist bereits vergeben.";
                    $msg= $msg." Dieser Username ist bereits vergeben. \n";
                    
                }
                }
                if(count($errors)){
                    
                $msg= $msg." Ihr Username konnte nicht gespeichert werden.";
                $_SESSION['ErrorMSG3']=$msg;
                
                 foreach($errors as $error)
                     echo $error."faeheler";
                 
                header("location: userconf.php");               
                }
                else{
                    $name= trim($_POST['newname']);
                $sql = "UPDATE
                                user
                        SET
                                username =  '".mysqli_real_escape_string($connid,$name)."'
                              
                        WHERE
                                id = '".mysqli_real_escape_string($connid,$_SESSION['UserID'])."'
                       ";   
                mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                header("location: userconf.php"); 
                    
            }
        }

?>

