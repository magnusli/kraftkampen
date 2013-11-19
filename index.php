<?php
require 'config.php';	//Setter databaselogin
require 'dbconnect.php'; 	//Kobler til database
require 'inc/get_userinfo.php';

$page_id= htmlspecialchars($_GET["page"]); //Henter side-identifikator
if (empty($page_id)) {
	$page_id = "start"; 	//Dersom det ikke er satt noen id i adressefeltet settes page_id til start
}
?>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic&subset=latin-ext,latin' rel='stylesheet' type='text/css'>	<!-- Google font -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <!-- Setter charset til utf8 (æøå) -->
		<link rel="stylesheet" type="text/css" href="./style/style.css" />
		<title> Kraftkampen </title> <!-- Sidetittel -->
	</head>
	
	<body>
		<div id="frame">
			
			<div id="content">
				<?php include "pages/$page_id.php"?> <!-- laster inn aktuelt sideinnhold -->
			</div>
			
			<div id="navigasjon"> 	
				<?php 
					//Dersom behov for nesteknapp genereres denne og href settes til URL beskrevet i inkludert "page"
					if ($neste_knapp) {
					  echo "<a href=$neste_side><img src=style/viderepil.png alt=Gå videre></a>";
					}
				?>
			</div>	
		</div>
	</body>
</html>
