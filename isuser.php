<?php

    // Session starten
ob_start();
    session_start();
	
if(isset($_SESSION['UserID'])){
	
	
	}

	else{ 
header("location: loginseite.php");
}
ob_end_flush();
?>