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

 //<?php echo $heizkosten2018[] = $row['betrag'];

//nebenkosten 2018
$wohnung = array();
$sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
$r1 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row1 = mysqli_fetch_assoc($r1);


$nebenkosten2018 = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 nebenkosten
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row1['wohnung'] . "' AND jahr = '2018' " ;
                                     
$r2 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row2 = mysqli_fetch_assoc($r2);

 //<?php echo $nebenkosten2018[] = $row2['betrag'];

//parkplatz 2018
$wohnung = array();
$sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
$r3 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row3 = mysqli_fetch_assoc($r3);


$parkplatz2018 = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 parkplatz
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row3['wohnung'] . "' AND jahr = '2018' " ;
                                     
$r4 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row4 = mysqli_fetch_assoc($r4);

 //<?php echo $parkplatz2018[] = $row4['betrag'];

//wasserverbrauch 2018
$wohnung = array();
$sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
$r5 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row5 = mysqli_fetch_assoc($r5);


$parkplatz2018 = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 wasserverbrauch
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row5['wohnung'] . "' AND jahr = '2018' " ;
                                     
$r6 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row6 = mysqli_fetch_assoc($r6);

 //<?php echo $wasserverbrauch2018[] = $row6['betrag'];

//heizchöste 2017
$wohnung = array();
$sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
$r7 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row7 = mysqli_fetch_assoc($r7);


$heizkosten2017 = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 heizkosten
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row7['wohnung'] . "' AND jahr = '2017' " ;
                                     
$r8 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row8 = mysqli_fetch_assoc($r8);

 //<?php echo $heizkosten2017[] = $row8['betrag'];

//nebenkosten 2017
$wohnung = array();
$sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
$r9 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row9 = mysqli_fetch_assoc($r9);


$nebenkosten2017 = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 nebenkosten
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row9['wohnung'] . "' AND jahr = '2017' " ;
                                     
$r10 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row10 = mysqli_fetch_assoc($r10);

 //<?php echo $nebenkosten2017[] = $row10['betrag'];

//parkplatz 2017
$wohnung = array();
$sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
$r11 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row11 = mysqli_fetch_assoc($r11);


$parkplatz2017 = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 parkplatz
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row11['wohnung'] . "' AND jahr = '2017' " ;
                                     
$r12 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row12 = mysqli_fetch_assoc($r12);

 //<?php echo $parkplatz2017[] = $row12['betrag'];

//wasserkosten 2017
$wohnung = array();
$sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '" . mysqli_real_escape_string($connid, $_SESSION['UserID']) . "'
                       ";
$r13 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row13 = mysqli_fetch_assoc($r13);


$wasserverbrauch2017 = array();
$sql = "SELECT
                                 betrag
                        FROM
                                 wasserverbrauch
                        WHERE
                                 Wohnungen_idGebaeude = '" . $wohnung[] = $row13['wohnung'] . "' AND jahr = '2017' " ;
                                     
$r14 = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row14 = mysqli_fetch_assoc($r14);

 //<?php echo $wasserverbrauch2017[] = $row14['betrag'];

?>