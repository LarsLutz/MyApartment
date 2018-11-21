<?php
define ("DAUER",432000 );
$diff= time() - DAUER;
$delete= "DELETE FROM news WHERE post < '".$diff."' order by post DESC LIMIT 10";  




$result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
?>