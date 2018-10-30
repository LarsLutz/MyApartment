<?php
    error_reporting(E_ALL);
    $MYSQL_HOST = 'localhost';
    $MYSQL_USER = 'root';
    $MYSQL_PASS = '';
    $MYSQL_DATA = 'myapartment_db';

    $connid = mysqli_connect($MYSQL_HOST, $MYSQL_USER,$MYSQL_PASS,$MYSQL_DATA) OR die("Error: ". mysqli_error());
    

?>
