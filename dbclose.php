<?php
error_reporting(E_ALL);
    error_reporting(E_ALL);
    $MYSQL_HOST = 'wp333.webpack.hosteurope.de';
    $MYSQL_USER = 'db12222424-2';
    $MYSQL_PASS = 'Dominion255#';
    $MYSQL_DATA = 'db12222424-2';

    $connid = mysqli_connect($MYSQL_HOST, $MYSQL_USER,$MYSQL_PASS,$MYSQL_DATA) OR die("Error: ". mysqli_error());
    
mysqli_close($connid);

?>

