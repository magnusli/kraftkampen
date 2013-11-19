<?php

$query="SELECT * FROM mainscreen WHERE id='1'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$steg=mysql_result($result,$i,"steg");

header( "refresh:2;url=index.php?page=$steg" );

?>

<center>
<img src="style/Walter_godt_jobbet_gif.gif" width="100%" alt="Venligst vent.. prosesserer info!">
</center>
