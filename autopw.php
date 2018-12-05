<?php
 
    
         error_reporting(E_ALL);
         include_once 'db.php';
         session_start();
        $msg = "";
        $errors = array();
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
            
            if(!isset($_POST['pwemail'])){
                $errors[]= "Bitte geben sie Ihre Daten ein.";
            $msg = $msg . " Bitte geben sie Ihre Daten ein. \n" ;
            }
            else {
                if(trim($_POST['pwemail'])==''){
                    $errors[]= "Bitte geben Sie Ihre Email-Adresse ein.";
                    $msg = $msg . " Bitte geben Sie Ihre Email-Adresse ein. \n";
                }
                elseif(!preg_match('?^[\w\.-]+@[\w\.-]+\.[\w]{2,4}$?', trim($_POST['pwemail']))){
                    $errors[]= "Ihre Email Adresse hat eine falsche Syntax.";
                    $msg = $msg . " Ihre Email Adresse hat eine falsche Syntax. \n";
                }
                elseif(trim($_POST['pwemail'])!= $row['email']){
                    $errors[]= "Diese Email-Adresse ist nicht vorhanden.";
                    $msg = $msg . " Diese Email-Adresse ist nicht vorhanden. \n";
                }
                                }
            if(count($errors)){
                $msg= $msg." Ihr Passwort konnte nicht gespeichert werden.";
                $_SESSION['ErrorMSG3']=$msg;
                
                 foreach($errors as $error)
                     echo $error."faeheler";
                  
               header("location: message.php");
                 
                 
            }
            else{
                
                $randpw = chr(rand(65,90)) . chr(rand(65,90))  . rand(0,9) .chr(rand(65,90)) . chr(rand(65,90)) . rand(0,9) . chr(rand(65,90)) . rand(0,9) ; // Zufallspw
                $pwhash= hash ( 'ripemd160' , trim($randpw),false );
               $msg=$msg. "Ihre Password wurde ge&auml;ndert! Sie erhalten in k&uuml;rze eine Mail mit dem neuen Password.";
               
                $sql = "UPDATE
                                user
                        SET
                                passwort ='".$pwhash."'
                        WHERE
                                email = '".$_POST['pwemail']."'
                       ";
                mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
               
                 $_SESSION['ErrorMSG3'] = "<label>".$msg."  //".$randpw."</label>";
                 
                $titel= "Wechsel erfolgeich! Sie erhalten in kürze eine E-Mail mit dem neuen Passwort";
                
                $empfaenger = $_POST['pwemail'];
                $betreff = "Passwort wurde zurück gesetzt";
                $from = "From: MyApartment <admin.bclaufen.ch>";
                $text = "Anbei Ihr neues Passwort: \n"
                        . "Password".$randpw."\n"
                        . "Bitte ändern sie das Passwort bei der nächsten Anmeldung!";
 
mail($empfaenger, $betreff, $text, $from);
               
                header("location: message.php");
                     
                   
                    
            }
        }
        else {   
             header("location: message.php"); 
           }
    
	
?> 





