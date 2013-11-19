<?php
require 'config.php';
require 'dbconnect.php';	//Kobler til database
require 'inc/question_info.php';	//Henter spørsmålsvariabler fra database med phpscript i ekstern fil
require 'inc/get_userinfo.php';		//Henter info om brukeren
// require 'inc/get_progress.php';

$qnr= htmlspecialchars($_GET["qnr"]);	//Henter qnr fra adresselinje og lagrer i variabel $qnr



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

				<h1 style="margin-top: 5px"> Samarbeidsoppgave </h1>
				<hint>Spør en annen på laget<hint>
				<p><?php echo $question ?></p> <!-- Setter inn spørsmålstekst hentet fra database -->
				
				<!-- Viser svaralternativer i 4 ulike divs. Alternativene er hentet fra sqldatabase -->
				<div id="svarfelt">
					<div id="svar1">
						<a href="correction.php?user=<?php echo $uid?>&question=<?php echo $id?>&answer=a1&qnr=<?php echo $qnr?>"><img src="style/Knapp_vanlig.png" alt="Svarknapp" height="100%" width="100%"></a>
						<div id="svartekst">
							<a href="correction.php?user=<?php echo $uid?>&question=<?php echo $id?>&answer=a1&qnr=<?php echo $qnr?>"><st><?php echo $a1 ?></st></a>
						</div>
					</div>
					<div id="svar2">
						<a href="correction.php?user=<?php echo $uid?>&question=<?php echo $id?>&answer=a2&qnr=<?php echo $qnr?>"><img src="style/Knapp_vanlig.png" alt="Svarknapp" height="100%" width="100%"></a>
						<a href="correction.php?user=<?php echo $uid?>&question=<?php echo $id?>&answer=a2&qnr=<?php echo $qnr?>"><st><?php echo $a2 ?></st></a>
					</div>
					<div id="svar3">
						<a href="correction.php?user=<?php echo $uid?>&question=<?php echo $id?>&answer=a3&qnr=<?php echo $qnr?>"><img src="style/Knapp_vanlig.png" alt="Svarknapp" height="100%" width="100%"></a>
						<a href="correction.php?user=<?php echo $uid?>&question=<?php echo $id?>&answer=a3&qnr=<?php echo $qnr?>"><st><?php echo $a3 ?></st></a>
					</div>
					<div id="svar4">
						<a href="correction.php?user=<?php echo $uid?>&question=<?php echo $id?>&answer=a4&qnr=<?php echo $qnr?>"><img src="style/Knapp_vanlig.png" alt="Svarknapp" height="100%" width="100%"></a>
						<a href="correction.php?user=<?php echo $uid?>&question=<?php echo $id?>&answer=a4&qnr=<?php echo $qnr?>"><st><?php echo $a4 ?></st></a>
					</div>
				</div>
			
				</center> 		
			</div>
		</div>
</body>
</html>
