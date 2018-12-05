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
        <style>
        .schrift{
            font-weight: normal;
            font-size: 12px;
        }
        
        h1{
        font-size: 16px;
        font-family: helvetica;
        }
        
        h2{
            font-size: 12px;
            font-weight: bold;
            font-family: helvetica;
        }
        
        p{
            font-size: 12px;
            font-family: helvetica;
            text-align: justify;
        
        ul{
        margin: 0;
        padding:0;
        }
         li{
        margin: 0;
        padding:0;
        }
        
        
        </style>
        
        <h1 style = "font-size: 16px";><tab>Hausordnung</h1>
        <h2>1. Rücksichtname</h2>
        <p >Im Interesse eines guten Verhältnisses unter den Mietern verpflichten sich 
            alle zu gegenseitiger Rücksichtnahme. Der Mieter ist dafür besorgt, dass sich die Mitbewohner 
            der Hausordnung unterziehen.
        </p>
        
        <h2>2. Reinigung</h2>
        <p>Ausserordentliche Verunreinigungen sind vom Verantwortlichen zu beseitigen. 
        Sofern kein Hauswart für die Reinigung gemeinsam benützter Gebäudeteile, wie z.B. 
        Treppenhaus, Kellergang, Hausgang, Estrich und die Schneeräumung usw. zuständig ist, ist sie von den 
        Mietern zu besorgen. Ohne anderslautende Abmachungen übernimmt der Mieter 
        die Reinigung des Treppenhauses (inklusive Fenster) im Bereiche seines Mietobjektes. 
        Dem Parterremieter obliegt die Reinigung der Abgänge in die Kellerräumlichkeiten 
        und der Zugänge. Dem Mieter des obersten Geschosses obliegt die Reinigung der 
        Aufgänge zum Dachgeschoss. Die Schneeräumung ist ohne gegenteilige Vereinbarung 
        Sache der Mieter, die sich in wöchentlichem Turnus abzuwechseln haben. 
        Die Garagen- und Autoabstellplatzmieter säubern die Garagenvorplätze und 
        Parkplätze und besorgen deren Eis- und Schneeräumung.
        </p>
        
        <h2>3. Gemeinsame Räume</h2>
        <p>Wo Waschküche, Waschautomat, Trockenraum und Bügelzimmer vorhanden sind, 
           findet die Benützung dieser Räume nach einem vom Vermieter festzulegenden Plan 
           statt, der den berechtigten Interessen der Mieter Rechnung trägt. Dem jeweiligen 
           Benützer steht das Recht zu, diese Räume während der bestimmten Zeit allein zu 
           benützen. Nach Gebrauch sind die benützten Räume und Apparate zu reinigen und 
           auszutrocknen, die Wasserabläufe freizumachen und im Winter die Fenster zu 
           schliessen. äsche darf nur an den bestimmten Orten (Estrich, Trockenraum oder 
           Aufhängeplatz) aufgehängt werden.
            </p>
        
        <h2>4. Zu unterlassen ist:</h2>
        <p><ul>
            <li>das Ausschütten und Ausklopfen von Behältnissen, Decken usw. aus den 
                Fenstern sowie von Terrassen und Balkonen;</li>
            <li>Teppiche vor morgens 07.00 Uhr und nach 20.00 Uhr und von 12.00 Uhr 
                bis 13.30 Uhr auszuklopfen. An Sonn- und allge-meinen Feiertagen ist 
                diese Arbeit grundsätzlich zu unterlassen;</li>
            <li>das Musizieren vor 08.00 Uhr und nach 21.00 Uhr und während der Mittagszeit 
                von 12.00 Uhr bis 13.00 Uhr. Tonwiedergabegeräte, wie z.B. Radio, Fernseh-, 
                Musikgeräte und Musikinstrumente etc. müssen so eingestellt bzw. gespielt 
                werden, dass sie Drittpersonen nicht stören oder belästigen (Zimmerlautstärke);</li>
            <li>die Benützung von Waschmaschinen, Tumblern zwischen 22.00 Uhr und 06.00 Uhr 
                und das starke Ein- und Auslaufen-lassen von Wasser zwischen 22.00 Uhr und 06.00 Uhr;</li>
            <li>harte Gegenstände, Asche, Kehricht- und Kohlenabfälle, hygienische 
                Binden und Wegwerfwindeln, Katzenstreu usw. in das WC zu werfen;</li>
            <li>Kehrichtsäcke im Hausgang stehen zu lassen. Wo Container vorhanden sind, 
                muss der Kehricht in verschlossenen Säcken direkt in dieselben deponiert 
                werden. Abfälle jeglicher Art dürfen nur an den vom Vermieter bestimmten 
                Orten und in zweckmässiger Weise aufbewahrt werden;</li>
            <li>Gegenstände im Hausflur, in Korridoren und übrigen gemein-samen 
                Räumen zu deponieren. Schwere Gegenstände wie Kisten und dergleichen 
                ohne schützende Unterlagen über Treppen und Böden zu transportieren.</li>
        </ul>
        </p>
        <h2>5. Grillieren</h2>
        <p>Beim Grillieren auf den Balkonen und Gartensitzplätzen ist auf die übrigen 
           Hausbewohner Rücksicht zu nehmen.</p>
        
        <h2>6. Sicherheit</h2>
        <p>Die Haustüre ist während der Nachtzeit zu schliessen.</p>
        
        <h2>7. Lift</h2>
        <p>Die im Lift angeschlagenen Vorschriften sind zu beachten. Betriebsstörungen 
           sind dem Hauswart oder der Verwaltung sofort zu melden. Die Anlage soll mit 
           der nötigen Sorgfalt behandelt werden.</p>
        
        <h2>8. Lärm</h2>
        <p>Im übrigen wird auf die Lärmschutzverordnung oder gegebenenfalls auf 
           die lokalen Lärmschutzreglemente sowie auf die Polizeiverordnung verwiesen.</p>
        
        <h2>9. Abstellplätze</h2>
        <p>Velos, Mofas und Kinderwagen sind an den dafür bestimmten Orten abzustellen. 
           Ist eine Garage mitvermietet, so darf ohne anderweitige Abrede der Vorplatz 
           nicht als Parkplatz benützt werden.</p>
        
        <h2>10. Garten und Hof</h2>
        <p>Für die Benützung der Gartenanlagen und des Hofes sind die Weisungen der 
           Verwaltung oder des Hauswartes zu befolgen. Sofern der Unterhalt und die 
           Reinigung der Umgebung Sache der Mieter ist, wird eine spezielle Gartenordnung 
           aufgestellt.</p>
        
        
        
        
        
        
        
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

