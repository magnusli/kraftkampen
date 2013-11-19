<?php
//Neste side:
$neste_side = "index.php?page=intro2&user=$uid";
$neste_knapp = false;

//Henter laginfo:

	$query="SELECT * FROM teams WHERE id='1'";
	mysql_set_charset("UTF8");
	header('Content-type: text/html; charset=utf-8'); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	
	$member1=mysql_result($result,$i,"user1");
	$member2=mysql_result($result,$i,"user2");
	$member3=mysql_result($result,$i,"user3");
	$member4=mysql_result($result,$i,"user4");


?>


<br>
<center>
<div id="intro_lag">
	
	<h1><b>Lag:</b></h1>
	
	<?php 
	echo "<p> $member1 <br> $member2 <br> $member3 <br> $member4 </p>";
	?>
	
</div>

<div id="intro_info">
	
	<p>Hjelp Walter med å <br> generere strøm! </p>
	<img src="walter/walter_glad.png" width="40%" alt="Den vanndråpeformede figurel walter"><br><br><br>
	<a href="index.php?page=intro&user=<?php echo $uid?>"><img src="style/spillkraftkampen_knapp.png" alt="Spill kraftkampen"></a>
	
	
</div>

</center> 