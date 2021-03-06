<?php
// adaptiert vom unterricht
$abfrage = "SELECT `personen`.`Name`, `personen`.`Vorname`, `personen`.`Email`, `wohnungen`.`Stockwerk`
FROM `personen` JOIN `wohnungen` ON `personen`.`wohnungen_idGebaeude` = `wohnungen`.`idGebaeude` ";

$ergebnis = mysqli_query($connid, $abfrage) or die(mysqli_error($connid));

echo "<table border = \"1\">";
$anzahl_spalten = mysqli_num_fields($ergebnis);
echo"<tr>";

for ($i = 0; $i < $anzahl_spalten; $i++) {
    $finfo = mysqli_fetch_field_direct($ergebnis, $i);
    echo "<th>" . $finfo->name . "</th>";
}
echo"</tr>";

// Rest der Tabelle in einer Schleife darstellen
while ($zeile = mysqli_fetch_assoc($ergebnis)) {
    echo "<tr>";
    foreach ($zeile as $schluessel => $wert) {
        echo"<td>" . $wert . "</td>";
    }
    echo"</tr>";
}
?>