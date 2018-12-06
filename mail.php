<?php
if(isset($_POST['mailsend']) AND $_POST['mailsend'] == 'Senden') {
$empfaenger = "admin@bclaufen.ch";
$betreff = "Anfrage von ".$_POST["email"];
$from = "From: ".$_POST["name"]. "<admin@bclaufen.ch>";
$text = $_POST["message"];
 
mail($empfaenger, $betreff, $text, $from);
}
?>