<?php

$empfaenger = "admin.bclaufen.ch";
$betreff = "Ihr neues Paswort";
$from = "From: ".$_POST["name"]. "<admin.bclaufen.ch>";
$text = "Hier ist ihr neues PW '.$randpw.'";
 
mail($empfaenger, $betreff, $text, $from);
?>

