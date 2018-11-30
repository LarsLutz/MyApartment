<?php
function fetch_data()
{
    include_once 'db.php';
    $output = '';
    
    $query = "SELECT `personen`.`Name`, `personen`.`Vorname`, `personen`.`Email`, `wohnungen`.`Stockwerk`
    FROM `personen` JOIN `wohnungen` ON `personen`.`wohnungen_idGebaeude` = `wohnungen`.`idGebaeude` ";
    $result = mysqli_query($connid, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        $output .= '
              <tr>
                <td>'.$row["Name"].'</td>
                <td>'.$row["Vorname"].'</td>
                <td>'.$row["Email"].'</td>
                <td>'.$row["Stockwerk"].'</td>
              </tr>
        ';  
    }
    return $output;
}

if(isset($_POST["dwonload"]))
{
    require_once("tcpdf/tcpdf.php");
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->addPage();
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Mieterspiegel_PDF");
    $obj_pdf->SetHeaderData('','', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterData(Array(PDF_FONT_NAME_DATA,'', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->setFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false); // or true
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica','', 12);
    
    $content = '';
    
    $content .= '
          <h3 align = "center"> Mieterspiegel </h3>
          <table border="1" cellspacing="0" cellpadding="5">
          <tr>
            <th width= "15%"> Name</th>
            <th width= "15%"> Vorname</th>
            <th width = "50%"> Email</th>
            <th > Stockwerk</th>
          </tr>
';
    
 $content .= fetch_data();
 
 $content .= '</table>';
 
 $obj_pdf->writeHTML($content);
 
 ob_end_clean();
 $obj_pdf->Output("sample.pdf", "I");
}


?>
<!DOCTYPE html>
<!--<html>
    <head>
        <title>
            Hurensohn
        </title>
    </head>
    <body>
        <table>
            <?php
           // echo fetch_data();
            ?>
            
        </table>
        <br />
        <form method="post">
            <input type="submit" name="create_pdf" value="Create PDF" />   
        </form>
        <br />
    </body>
</html>-->

