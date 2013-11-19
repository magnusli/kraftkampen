<?php
 
	$uid= htmlspecialchars($_GET["user"]);
 
	$query="SELECT * FROM users WHERE id='$uid'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$name=mysql_result($result,$i,"name");
	$cq1=mysql_result($result, $i, "cq1");
	$cq2=mysql_result($result, $i, "cq2");
	$done=mysql_result($result, $i, "done");
	 
?>