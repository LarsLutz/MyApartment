<?php
 
    
         error_reporting(E_ALL);
         include_once 'db.php';
         $pw="";
         
         if(isset($_POST['submit']) AND $_POST['submit'] == 'Senden') {
                // momentane Email-Adresse ausfiltern
                $sql = "SELECT
                               email
                        FROM
                               user
                        WHERE
                               email = '".$_POST['pwemail']."'
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $row = mysqli_fetch_assoc($result);

        
            $errors=array();
            
            if(!isset($_POST['pwemail']))
                $errors[]= "Bitte geben sie Ihre Daten ein.";
            else {
                if(trim($_POST['pwemail'])=='')
                    $errors[]= "Bitte geben Sie Ihre Email-Adresse ein.";
                elseif(!preg_match('?^[\w\.-]+@[\w\.-]+\.[\w]{2,4}$?', trim($_POST['pwemail'])))
                    $errors[]= "Ihre Email Adresse hat eine falsche Syntax.";
                elseif(trim($_POST['pwemail'])!= $row['email'])
                    $errors[]= "Diese Email-Adresse ist nicht vorhanden.";
                                }
            if(count($errors)){
                $titel= "Ihr Passwort konnte nicht gewechselt werden.<br>\n";
                  
                include_once 'message.php';
                 
                 
            }
            else{
                
                $randpw = chr(rand(65,90)) . chr(rand(65,90))  . rand(0,9) .chr(rand(65,90)) . chr(rand(65,90)) . rand(0,9) . chr(rand(65,90)) . rand(0,9) ; // Zufallspw
                
                $sql = "UPDATE
                                user
                        SET
                                passwort ='".md5(trim($randpw))."'
                        WHERE
                                email = '".$_POST['pwemail']."'
                       ";
                mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
               // include_once 'mail.php';
                $titel= "Wechsel erfolgeich! Sie erhalten in kürze eine E-Mail mit dem neuen Passwort";
                $pw= "PW: ".$randpw."";
               
                 include_once 'message.php';
                     
                   
                    
            }
        }
        else {   
            //echo 'Fehler bei der Post Übertragung';
           }
    
	
?> 





