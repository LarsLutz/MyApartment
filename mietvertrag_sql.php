<?php
include_once 'db.php';
//alles vom igloggte nutzer
//
//alli sql php sache före mietvertrag
//
//<?php echo $mietvnachname[] = $row1['name']; 
//<?php echo $mietvvorname[] = $rows2['vorname'];
//<?php echo $mietvgeburtsdatum[] = $rows3['geburtsdatum'];
//<?php echo $mietvtel[] = $rows4['tel'];
//<?php echo $mietvemail[] = $rows5['email'];
//<?php echo $mietvzins[] = $rows6['miete'];
//<?php echo $mietvflaeche[] = $rows7['flaeche'];
//<?php echo $mietvzimmer[] = $rows8['groesse'];
//<?php echo $mietvstockwerk[] = $rows9['stockwerk'];
//<?php echo $mietvnebenkosten[] = $rows10['betrag'];
//<?php echo $mietveinzugsdatum[] = $rows11['einzugsdatum'];
//
//Wohnigsnummere
$wohnung = array();
$sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
$result = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row = mysqli_fetch_assoc($result);

//name
$mietvnachname = array();
$sql = "SELECT
                                 name
                        FROM
                                 personen
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result1 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row1 = mysqli_fetch_assoc($result1);

 //<?php echo $mietvnachname[] = $row1['name'];


//vorname
$mietvvorname = array();
$sql = "SELECT
                                 vorname
                        FROM
                                 personen
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result2 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows2 = mysqli_fetch_assoc($result2);

//<?php echo $mietvvorname[] = $rows2['vorname'];

//Geburtsdatum
$mietvgeburtsdatum = array();
$sql = "SELECT
                                 geburtsdatum
                        FROM
                                 personen
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result3 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows3 = mysqli_fetch_assoc($result3);

//<?php echo $mietvgeburtsdatum[] = $rows3['geburtsdatum'];

//Telefon
$mietvtel = array();
$sql = "SELECT
                                 tel
                        FROM
                                 personen
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result4 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows4 = mysqli_fetch_assoc($result4);

//<?php echo $mietvtel[] = $rows4['tel'];

//email
$mietvmail = array();
$sql = "SELECT
                                 email
                        FROM
                                 personen
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result5 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows5 = mysqli_fetch_assoc($result5);

//<?php echo $mietvemail[] = $rows5['email'];

//mietzins
$mietvzins = array();
$sql = "SELECT
                                 miete
                        FROM
                                 wohnungen
                        WHERE
                                 idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result6 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows6 = mysqli_fetch_assoc($result6);

//<?php echo $mietvzins[] = $rows6['miete'];

//flaeche
$mietvflaeche = array();
$sql = "SELECT
                                 flaeche
                        FROM
                                 wohnungen
                        WHERE
                                 idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result7 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows7 = mysqli_fetch_assoc($result7);

//<?php echo $mietvflaeche[] = $rows7['flaeche'];

//zimmer
$mietvzimmer = array();
$sql = "SELECT
                                 groesse
                        FROM
                                 wohnungen
                        WHERE
                                 idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result8 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows8 = mysqli_fetch_assoc($result8);

//<?php echo $mietvzimmer[] = $rows8['groesse'];

//stockwerk
$mietvstockwerk = array();
$sql = "SELECT
                                 stockwerk
                        FROM
                                 wohnungen
                        WHERE
                                 idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result9 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows9 = mysqli_fetch_assoc($result9);

//<?php echo $mietvstockwerk[] = $rows9['stockwerk'];

//nebenkosten

$mietvnebenkosten = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 nebenkosten
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row['wohnung'] . "' AND jahr = '2018' " ;
                                     
$result10 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows10 = mysqli_fetch_assoc($result10);

//<?php echo $mietvnebenkosten[] = $rows10['betrag'];

//einzugsdatum
$mietveinzugsdatum = array();
$sql = "SELECT
                                 einzugsdatum
                        FROM
                                 personen
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'";
                                     
$result11 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$rows11 = mysqli_fetch_assoc($result11);

//<?php echo $mietveinzugsdatum[] = $rows11['einzugsdatum'];

?>