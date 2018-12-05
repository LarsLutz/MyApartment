<?php
error_reporting(E_ALL);
// loggt einen User aus
// Session starten
session_start();

function doLogout() {


    //Cooki wird gelöscht
    if (isset($_COOKIE['autologin'])) {
        setcookie("autologin", "", time() - 60 * 60);
    }
    // die Session ID wird aus der Datenbank gelöscht
    include_once 'db.php';
    $sql = "UPDATE
                           user
                 SET
                           sessionid = NULL,
                           autologin = NULL,
                           ip = NULL

                 WHERE
                           ID = '" . $_SESSION['UserID'] . "'
                ";
    mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
    include_once 'dbclose.php';
}

// User ausloggen
doLogout();
// $_SESSION leeren
$_SESSION = array();
// Session löschen
session_destroy();
header("location: loginseite.php");
exit();
?>