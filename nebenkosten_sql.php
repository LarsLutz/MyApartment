<?php
include_once 'db.php';

//heizchöste 2018
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


$heizkosten2018 = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 heizkosten
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row['wohnung'] . "' AND jahr = '2018' " ;
                                     
$result = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row = mysqli_fetch_assoc($result);

 //$heizkosten2018[] = $row['betrag'];
?>