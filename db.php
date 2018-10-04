<?php
    error_reporting(E_ALL);
    $MYSQL_HOST = 'localhost';
    $MYSQL_USER = 'root';
    //$MYSQL_PASS = 'myPassWord';
    $MYSQL_DATA = 'myapartment_db';

    $connid = @mysql_connect($MYSQL_HOST, $MYSQL_USER) OR die("Error: ".mysql_error());
    mysql_select_db($MYSQL_DATA) OR die("Error: ".mysql_error());

   

    if(!isset($_SESSION['UserID'])) {
        
			header("location: loginfail.php");
    }
    else{

         $sql = "SELECT
                         username,
                         email,
                         avatar
                 FROM
                     user
                 WHERE
                     ID = '".mysql_real_escape_string($_SESSION['UserID'])."'
                ";
        $result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
        $row = mysql_fetch_assoc($result); 
		}
		?>
