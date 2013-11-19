<?php 

//henter steg
$query="SELECT * FROM mainscreen WHERE id='1'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$steg=mysql_result($result,$i,"steg");
echo $steg;
	//Sjekker om steg er endret. 
 if ($steg == "4") {
	sleep(3);
	header( "Location: index.php?page=wait" );
	
 } else { //Går videre til neste steg
	
	header( "Location: index.php?page=4.5" );
 }

?>
