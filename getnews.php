<?php

$sql = "SELECT
		   autor,
           titel,
           text,
           post
       FROM
           news 
		   Order by post DESC";
		   
$result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
	
	
if (mysqli_num_rows($result)) {
   
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        $row = mysqli_fetch_object($result);
        // Datum ins Format Tag.Monat.Jahr - Stunde:Minute umwandeln
        $date = date('d.m.Y - H:i',($row->post));
         echo "<table class='alt'>\n";
        echo "<thead>\n";
        echo "  <tr>\n";
        echo "    <th >". $row->titel ."</th>\n";
        echo "    <th style='text-align:right'>". $row->autor.":&nbsp; &nbsp;   ".$date ."</th>\n";
        echo "  </tr>\n";
        echo "</thead>";
        echo "<tbody>";
        echo "  <tr>\n";
        echo "    <td colspan='3'><br>". $row->text ."<br>\n<br>\n</td>\n";
        echo "</tbody>";
       
     echo "</table>\n";   
    }
    
    
	}
    else {
    echo "Zur Zeit sind noch keine News in der Datenbank vorhanden.\n";
}
?>


