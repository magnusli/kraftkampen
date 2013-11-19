<?php
 
	require '../config.php';
	require '../dbconnect.php';
	
	$query="SELECT * FROM teams WHERE id='1'";
	mysql_set_charset("UTF8");
	header('Content-type: text/html; charset=utf-8'); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$u1=mysql_result($result,$i,"user1");
	$u2=mysql_result($result,$i,"user2");
	$u3=mysql_result($result,$i,"user3");
	$u4=mysql_result($result,$i,"user4");
	
	$value = $_POST['navn'];
	
	if (empty($u1)) {
		$free_position = "user1";
		$uid = "1";
	} elseif (empty($u2)) {
		$free_position = "user2";
		$uid = "2";
	} elseif (empty($u3)) {
		$free_position = "user3";
		$uid = "3";
	} elseif (empty($u4)) {
		$free_position = "user4";
		$uid = "4";
	} else {
		$free_position = "";
		$uid = "0";
	}
		
	echo $free_position;
	
	$result = mysql_query("UPDATE teams SET $free_position='$value' WHERE id='1'") 
	or die(mysql_error());  
	
	$result = mysql_query("UPDATE users SET name='$value' WHERE id='$uid'") 
	or die(mysql_error());  
    
	
	header( "Location: ../index.php?page=wait_info&user=$uid&stepid=1" ) ;
	
	 
?>