<?php
 
	$query="SELECT * FROM teams WHERE id='1'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$score=mysql_result($result,$i,"score");
	$user1=mysql_result($result,$i,"user1");
	$user2=mysql_result($result,$i,"user2");
	$user3=mysql_result($result,$i,"user3");
	$user4=mysql_result($result,$i,"user4");
	
	$team_name = "$user1, $user2, $user3 og $user4";
	
	mysql_query("INSERT INTO scoreboard (name, score) VALUES('$team_name', '$score' ) ") 
	or die(mysql_error());
	
	mysql_query("UPDATE teams SET user1='', user2='', user3='', user4='', score=''  WHERE id='1'") 
	or die(mysql_error());  
	
	mysql_query("UPDATE users SET name=''") 
	or die(mysql_error()); 

	mysql_query("UPDATE mainscreen SET steg='0' WHERE id='1'") 
	or die(mysql_error()); 
?>