<?php
	
	require '../config.php';
	require '../dbconnect.php';
	
	$sek = $_POST['sek'];
	
	//Henter nåværende poengsum fra database
	$query="SELECT * FROM teams WHERE id='1'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	$current_score=mysql_result($result,$i,"score");
	
	//Regner ut poengsum for antall sekunder under 40
	$ganger = "40" - $sek;
	$pumppoints = $ganger * "20";
	$new_score = $current_score + $pumppoints;
	

	//Regner ut watt per sekund
	$wps = 1200 / $sek;

	//140
	
	//Legger til tidsbruk, poengsum, watt per sekund og produksjonseksempler i database
	$result = mysql_query("UPDATE teams SET pumptime='$sek', score='$new_score', wps='$wps', prod1='3', prod2='1', prod3='2'	WHERE id='1'") 
	or die(mysql_error()); 
	
	
	//Sier i fra til klienter at alt er klart
	mysql_query("UPDATE users SET done4='1'") 
	or die(mysql_error()); 
	
	//Oppdaterer steg
	mysql_query("UPDATE mainscreen SET steg='6' WHERE id='1'") 
	or die(mysql_error()); 
	
	header( "Location: index.php" ) ;
?>

