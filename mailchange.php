<?php
include_once 'db.php';

    
	
        if(isset($_POST['mailok']) AND $_POST['mailok']=='Ok'){
            session_start();
            $msg="";
            $errors = array();
            // Pruefen, ob alle Formularfelder vorhanden sind
            if(!isset($_POST['newemail'])){
                
                $errors = "Bitte f&uuml;llen sie alle Formularfelder aus.";
                $msg= $msg." Bitte f&uumlllen sie alle Formularfelder aus. \n";
            }
            else{
                $emails = array();
                $sql = "SELECT
                               email
                        FROM
                               user
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                while($row = mysqli_fetch_assoc($result))
                    $emails[] = $row['email'];
                // momentane Email-Adresse ausfiltern
                $sql = "SELECT
                               email
                        FROM
                               user
                        WHERE
                               id = '".mysqli_real_escape_string($connid,$_SESSION['UserID'])."'
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $row = mysqli_fetch_assoc($result);

                if(trim($_POST['newemail'])==''){
                    $errors[]= "Bitte geben Sie Ihre Email-Adresse ein.";
                    $msg= $msg." Bitte geben Sie Ihre Email-Adresse ein. \n";
                }
                elseif(!preg_match('?^[\w\.-]+@[\w\.-]+\.[\w]{2,4}$?', trim($_POST['newemail']))){
                    $errors[]= "Die Syntax Ihrer E-Mail Adresse ist falsch.";
                    $msg= $msg." Die Syntax Ihrer E-Mail Adresse ist falsch. \n";
                }
                elseif(in_array(trim($_POST['newemail']), $emails) AND trim($_POST['newemail'])!= $row['email']){
                    $errors[]= "Diese Email-Adresse ist bereits vergeben.";
                    $msg= $msg." Diese Email-Adresse ist bereits vergeben. \n";
                    
                }
                }
                if(count($errors)){
                    
                  echo "Ihre E-Mail konnte nicht gespeichert werden. \n";
                $msg= $msg." Ihre E-Mail konnte nicht gespeichert werden.";
                $_SESSION['ErrorMSG2']=$msg;
                
                 foreach($errors as $error)
                     echo $error."faeheler";
                 
                header("location: userconf.php");               
                }
                else{
                    $mail= trim($_POST['newemail']);
                $sql = "UPDATE
                                user
                        SET
                                email =  '".mysqli_real_escape_string($connid,$mail)."'
                              
                        WHERE
                                id = '".mysqli_real_escape_string($connid,$_SESSION['UserID'])."'
                       ";   
                mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                header("location: userconf.php"); 
                    
            }
        }

?>