<?php
require '../config.php';
require '../dbconnect.php'; 	//Kobler til database

$page_id= htmlspecialchars($_GET["page"]);	//henter pageid
if ($page_id == "") {
	$page_id = "0";
}

?>

<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" type="text/css" href="./style/style.css" />
	<title> Kraftkampen </title>
	<style type="text/css">
	
	</style>
	</head>
	
	<body>
		
		<div id="frame">
		
			<div id="content">
			
			  <?php include "pages/$page_id.php"?> <!-- Henter sideinnhold -->
		
			</div>
			
		</div>
</body>
</html>
