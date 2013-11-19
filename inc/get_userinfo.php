<?php
	//henter informasjon om aktuell bruker fra database
	$uid= htmlspecialchars($_GET["user"]); 	//henter userid fra URL
 
	$query="SELECT * FROM users WHERE id='$uid'";
	mysql_set_charset("UTF8");
	header('Content-type: text/html; charset=utf-8'); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	
	$name=mysql_result($result,$i,"name");	//Navn	
	$cq1=mysql_result($result, $i, "cq1");	//spørsmål1
	$cq2=mysql_result($result, $i, "cq2");	//Spørsmål2
	$done=mysql_result($result, $i, "done");
?>