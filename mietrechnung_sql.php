<?php

include_once 'db.php';

$email = array();
                    
                        $sql = "SELECT
                               email
                        FROM
                               user
                        WHERE
                               id = '".mysqli_real_escape_string($connid,$_SESSION['UserID'])."'
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $reihe = mysqli_fetch_assoc($result);
               
                
                $monat = array();
                    $sql = "SELECT
                                 Einzugsdatum
                        FROM
                                 personen
                        WHERE
                                 Email = '".$email[] = $reihe['email']."'
                       "; 
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $reihe = mysqli_fetch_assoc($result);
                
                        
                        $einzugsdatum = date($monat[] = $reihe['Einzugsdatum']);
                        $d1 = new DateTime ($einzugsdatum);
                        $d2 = new Datetime (date("Y-m-d"));                  
                        $monatsdauer = ($d1->diff($d2)->m + ($d1->diff($d2)->y*12));
                        $m17 = date('m', strtotime($einzugsdatum));

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


$miete = array();
$sql = "SELECT
                                 Miete
                        FROM
                                 wohnungen
                        WHERE
                                 idGebaeude = '" . $wohnung[] = $row['wohnung'] . "'
                       ";
$result = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());
$row = mysqli_fetch_assoc($result);



$m = $m17 + 1 - 1;
for ($i = 0; $i < $monatsdauer; $i++){
    
    echo "<tr>";
    echo"<td>" . $m .  "</td>";
    echo"<td> bezahlt </td>";
    echo"<td>" . $miete[] = $row['Miete']; "</td>";
    echo "</tr>";
    if ($m < 13){
        $m++;
    }else{
        $m=1;
    }
            
}




