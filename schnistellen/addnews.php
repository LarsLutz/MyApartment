<?php

include_once '../db.php';

$autor = getAutor();
$titel= getTitel();
$text= getText();


$sql = "INSERT INTO news (`autor`, `titel`, `text`, `post`)
		VALUES ('".mysqli_real_escape_string($connid, $autor)."','".mysqli_real_escape_string($connid, $titel)."','".mysqli_real_escape_string($connid, $text)."','".time()."'
		)";
          mysqli_query($connid, $sql) OR die("<pre>\n" . $sql . "</pre>\n" . mysqli_error());


          
include_once '../dbclose.php';
?>

