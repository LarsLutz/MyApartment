<?php
error_reporting(E_ALL);
    error_reporting(E_ALL);
    $MYSQL_HOST = '';
    $MYSQL_USER = '';
    $MYSQL_PASS = '';
    $MYSQL_DATA = '';

    $connid = mysqli_connect($MYSQL_HOST, $MYSQL_USER,$MYSQL_PASS,$MYSQL_DATA) OR die("Error: ". mysqli_error());
    
mysqli_close($connid);

?>

