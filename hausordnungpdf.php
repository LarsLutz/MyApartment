<?php


require_once("tcpdf/tcpdf.php");

// neues PDF Dokument erstellen
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

ob_start();
// Dokumentinformationen
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Eduart Bunjaku, Lars Lutz, Robin Widmer');
$pdf->SetTitle('Hausordnung');
//$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('MyApartment, Hausordnung');

// set default header data
$pdf->SetHeaderData('', '', "MyApartment", "");
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// Text wirft Schatten ab
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Inhalt, der angezeigt werden soll
$html = <<<EOD
        <h1 style = "font-size: 16px";><tab>Hausordnung</h1>
        <h2 style = "font-size: 12px, column-width: 200px;">1. Rücksichtname</h2>
        <p align="justify" style = "font-size: 12px">Im Interesse eines guten Verhältnisses unter den Mietern verpflichten sich 
            alle zu gegenseitiger Rücksichtnahme. Der Mieter ist dafür besorgt, dass sich die Mitbewohner 
            der Hausordnung unterziehen.</p>
        
EOD;

// gibt den Text aus
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
ob_end_clean();
$pdf->Output('Hausordnung.pdf', 'I');


//============================================================+
// END OF FILE
//============================================================+

