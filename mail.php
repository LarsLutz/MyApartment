<?php

$empfaenger = $_POST[pwemail];
$betreff = "Ihr neues Paswort";
$from = "From: My Apartment <absender@domain.de>";
$text = "Hier ist ihr neues PW '.$randpw.'";
 
mail($empfaenger, $betreff, $text, $from);
?>

