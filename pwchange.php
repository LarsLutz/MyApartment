<?php
include_once 'db.php';
$msg = "";

if(isset($_POST['pwok']) AND $_POST['pwok'] == 'Ok') {
    session_start();
    echo $_SESSION['UserID'];
    global $msg;
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
                $errors[]= "Bitte benutzen Sie das Formular aus Ihrem Profil.";
            else {
                if(trim($row['passwort']) != (trim($_POST['passwordold'])))
                    $errors[]= "Ihr altes Passwort ist nicht korrekt.";
                    $msg= $msg+" Ihr altes Passwort ist nicht korrekt";
                if(trim($_POST['passwordnew'])==""){
                    $errors[]= "Bitte geben Sie Ihr Passwort ein.";
                    $msg= $msg+" Bitte geben Sie Ihr neues Passwort ein";
                }
                elseif(strlen(trim($_POST['passwordnew'])) < 6)
                    $errors[]= "Ihr Passwort muss mindestens 6 Zeichen lang sein.";
                    $msg= $msg+" Ihr Passwort muss mindestens 6 Zeichen lang sein.";
                if(trim($_POST['passwordnewag'])==""){
                    $errors[]= "Bitte wiederholen Sie Ihr Passwort.";
                    $msg= $msg+" Bitte wiederholen Sie Ihr Passwort.";
                }
                elseif(trim($_POST['passwordnew']) != trim($_POST['passwordnewag']))
                    $errors[]= "Ihre Passwortwiederholung war nicht korrekt.";
                    $msg= $msg+" Ihre Passwortwiederholung war nicht korrekt.";
                // Kontrolle des alten Passworts
                
            }
            if(count($errors)){
                echo "Ihr Passwort konnte nicht gespeichert werden.<br>\n".
                     "<br>\n";
                $msg= $msg+" Ihr Passwort konnte nicht gespeichert werden.";
                 foreach($errors as $error)
                     echo $error."faeheler";
                 
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

<!DOCTYPE HTML>
<h2>Passwort &auml;ndern</h2>
<label><?php echo $msg; ?></label>
<input type="password" name="passwordold" id="passwordold" value="" placeholder="Altes Passwort" tabindex="1" />
<input type="password" name="passwordnew" id="passwordnew" value="" placeholder="Neues Passwort" tabindex="2" />
<input type="password" name="passwordnewag" id="passwordnewag" value="" placeholder="Neues Passwort wiederholen" tabindex="3" />
<br>
<span class="loginbutton">
    <input type="submit" name="pwok" value="Ok" class="primary" tabindex="4"/>
    <input type="reset" value="Abbrechen" tabindex="4" />
    </span>

