<?php
$neste_side ="index.php?page=pumpekraft1&user=$uid";
$neste_knapp = true;

//Henter laginfo:
	$query="SELECT * FROM teams WHERE id='1'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	$pumptime=mysql_result($result,$i,"pumptime");
	$wps=mysql_result($result,$i,"wps");
	$prod1=mysql_result($result,$i,"prod1");
	$prod2=mysql_result($result,$i,"prod2");
	$prod3=mysql_result($result,$i,"prod3");

?>
	
<center>
	
	<p>Tid: <b><?php echo $pumptime ?></b> sekunder
	<br>
	Strøm: <b><?php echo $wps ?></b> watt </p>
	<div id="pumpestats_venstre">
		<img src="style/Lyspaere.png" alt="Lyspære" height="24%"><br><br>
		<b><p style="display:inline"><?php echo $prod1?> minutt(er)</p></b><br>
		<p style="display:inline; font-size:30px">lys i en lyspære</p>
	</div>
	<div id="pumpestats_senter">
		<img src="style/Macbook.png" alt="Macbook" height="24%"><br><br>
		<b><p style="display:inline"><?php echo $prod2?>% batteri</p></b><br>
		<p style="display:inline; font-size:30px">på en Macbook</p>
	</div>
	<div id="pumpestats_hoyre">
		<img src="style/iPhone.png" alt="Iphone" height="24%"><br><br>
		<b><p style="display:inline"><?php echo $prod3?>% batteri</p></b><br>
		<p style="display:inline; font-size:30px">på en iPhone</p>
	</div>
	
</center> 		