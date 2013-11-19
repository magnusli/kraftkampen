<?php

//Henter laginfo:

	$query="SELECT * FROM teams WHERE id='1'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$pumptime=mysql_result($result,$i,"pumptime");
	$wps=mysql_result($result,$i,"wps");
	
	mysql_query("UPDATE mainscreen SET steg='1'") 
			or die(mysql_error()); 
	header( "refresh:15;url=index.php?page=1" );

?>

<center>
	
	<p>Dere fylte opp vannmagasinet på 
	<br><b><?php echo $pumptime ?> sekunder</b><br>
	og produserte i gjennomsnitt <br>
	<b><?php echo $wps?> watt!</b></p>

	<img src="style/Fortsett_på_mobilen.png" width="40%" alt="Fortsett spillet på mobiltelefonen!">

</center>
