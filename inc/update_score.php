<?php
	
	$query="SELECT * FROM teams WHERE id='1'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$current_score=mysql_result($result,$i,"score");
	
	$new_score = $current_score + "47.5";
	
	$result = mysql_query("UPDATE teams SET score='$new_score' WHERE id='1'") 
	or die(mysql_error());  
?>