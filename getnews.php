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
        echo "    <th>". $row->titel ."</th>\n";
//	echo "	  <th style='text-align:right'>".$row->autor."</th>\n";
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

<!--<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											
												<tr>
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
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
		</div>-->
