<?php
	//Henter informasjon om spørsmål
	
	$id= htmlspecialchars($_GET["question"]); 	//Spørsmålid fra URL
	$a_id = htmlspecialchars($_GET["answer"]);	//Svarid fra URL
	
	//henter fra database
	$query="SELECT * FROM questions WHERE i='$id'";	
	mysql_set_charset("UTF8");
	header('Content-type: text/html; charset=utf-8'); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$question=mysql_result($result,$i,"question");
	$a1=mysql_result($result,$i,"a1");
	$a2=mysql_result($result,$i,"a2");
	$a3=mysql_result($result,$i,"a3");
	$a4=mysql_result($result,$i,"a4");
	$a_correct=mysql_result($result,$i,"a_correct");
	$feedback=mysql_result($result,$i,"feedback");
	
	$answer = mysql_result($result,$i,$a_id);
?>

