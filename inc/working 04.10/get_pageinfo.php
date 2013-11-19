<?php
 
	$pageid= htmlspecialchars($_GET["page"]);
 
	$query="SELECT * FROM pages WHERE id='$pageid'";
	mysql_set_charset("UTF8");
	header('Content-type: text/html; charset=utf-8'); 
	
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$pagetitle=mysql_result($result,$i,"title");
	$pagecontent=mysql_result($result,$i,"content");
	
?>