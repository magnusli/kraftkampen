<?php
 
	$query="SELECT * FROM progress WHERE id='1'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$step_done=mysql_result($result,$i,"done");


	 

?>