<?php
require 'config.php';
require 'dbconnect.php';
require 'inc/question_info.php';
require 'inc/get_userinfo.php';

//Setter neste side på bakgrunn av qnr i adresselinjen
$qnr= htmlspecialchars($_GET["qnr"]);
if ($qnr == "1") {
	$neste_side = "index.php?page=pumpekraft0&user=$uid&stepid=2";
} else {
	$neste_side = "index.php?page=wait_info&user=$uid&stepid=3";
}
?>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
		<link rel="stylesheet" type="text/css" href="./style/style.css" />
		<title> Kraftkampen </title>
	</head>
	
	<body>

		<div id="frame">
		
			<div id="content">
			
				<center>
				
				<div id="svarfelt">
					
					<?php
						
						$likhet = strcmp($answer , $a_correct);		//sjekker om svaret fra aktuell knapp er det samme som riktig svar definert i database
						
						//Viser tilpasset informasjon avhengig av om angitt svar var likt som riktig svar
						if ($likhet == 0)
						  {
						 echo "<img src=style/riktig_svar.png alt=Du svarte riktig!=40%>";
						 echo "<p>$feedback</p>";
						 require 'inc/update_score.php';
						   }
						else
						  {
						  echo "<img src=style/feil_svar.png alt=Du svarte feil=40%>";
						  echo "<p>$feedback</p>";
						  }
						  
						mysql_query("UPDATE users SET done$qnr='1' WHERE id='$uid'") 	//Oppdaterer status i database slik at andre klienter kan gå videre
						or die(mysql_error());  
					?>
						
					<hint>Hjelp de andre med å besvare sine spørsmål før du går videre!</hint>
				
				</div>
			
				</center> 		
			</div>
			<br>
			<div id="navigasjon"> 
			
				<center>
					<a href="<?php echo "$neste_side" ?>"><img src="style/viderepil.png" alt="Gå videre"></a>
				</center
			
			</div>
			
		</div>
	
	<div id="footer">
		<p> </p>
	</div>
	
</body>
</html>
