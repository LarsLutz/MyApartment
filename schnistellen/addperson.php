<?php
include_once '../db.php';

$idPersonen = getIdPersonen();
$name= getName();
$vorname= getVorname();
$gebdatum=getGeburtsdatum();
$eindatum=getEinzugsdatum();
$tel= getTel();
$email=getEmail();
$woid=getWohnungen_idGebaeude();


$sql = "INSERT INTO news (`idPersonen`, `name`, `vorname`, `geburtsdatum`, `einzugsdatum`, `tel`, `email`, `Wohnungen_idGebaeude`)
		VALUES ('".mysqli_real_escape_string($connid, $idPersonen)."','".mysqli_real_escape_string($connid, $name)."','".mysqli_real_escape_string($connid, $vorname)."','".mysqli_real_escape_string($connid, $gebdatum)."','".mysqli_real_escape_string($connid, $eindatum)."','".mysqli_real_escape_string($connid, $tel)."','".mysqli_real_escape_string($connid, $email)."','".mysqli_real_escape_string($connid, $woid)."'
		)";
          mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());


          
include_once '../dbclose.php';

?>

