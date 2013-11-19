<?php
//Sjekker hvilket steg som skal vises

$query="SELECT * FROM mainscreen WHERE id='1'";
$result=mysql_query($query);
$num=mysql_numrows($result);

$steg=mysql_result($result,$i,"steg");
echo $steg;
echo json_encode($result);
?>