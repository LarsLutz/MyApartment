<?php
include_once 'db.php';


$zeile = array();

$sql = "SELECT name FROM Personen";

$result = mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());


 $anzahl_spalten= mysqli_num_fields($result);
 

while ($row = mysqli_fetch_assoc($result)) {



    echo " <tr>
                <td>" . $zeile[] = $row['name'] . "</td>
                <td>Ante turpis integer aliquet porttitor.</td>  
                <td>29.99</td>
           </tr>";
// 2 zeile td vorname aus DB auslesen
}

// Tabellenkopf darstellen
//                                    $anzahl_spalten= mysqli_num_fields($result);
//                                    echo"<tr>";
//                                    for($i=0; $i<$anzahl_spalten;$i++)
//                                    {
//                                        $finfo= mysqli_fetch_field_direct($result,$i);
//                                       echo "<th>".$finfo->name."</th>";
//                                   }
//                                    echo"</tr>";
//
//                                        // Rest der Tabelle in einer Schleife darstellen
//                                   while($zeile= mysqli_fetch_assoc($result))
//                                    {
//                                        echo "<tr>";
//                                        while(list($schlüssel, $wert)= each($zeile))
//                                        {
//                                            echo"<td>".$wert."</td>";
//                                        }
//                                        echo"</tr>";
//                                   }
?>

<!--<tr>
                                    <td>Item One</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Two</td>
                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Three</td>
                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Four</td>
                                    <td>Vitae integer tempus condimentum.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Five</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>-->