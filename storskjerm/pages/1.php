<?php
//Neste side:
$neste_side = "index.php?page=2";
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
	$score=mysql_result($result,$i,"score");

	
	//Sjekker progressjonen fra database
	$query="SELECT * FROM mainscreen WHERE id='1'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	$steg=mysql_result($result,$i,"steg");
	
	if ($member1 == "") {
		header("refresh:0;url=index.php?page=7");
	} else {
	header( "refresh:3;url=index.php?page=$steg" );	//Sender til riktig side
	}
?>


<center><h1> KRAFTKAMPEN </h1>
<p>
Nå spiller:<br><br>
<b><?php echo "$member1, $member2, $member3 og $member4" ?></b>

<br><br>

Så langt har dere
<!-- HER KOMMER KODE FOR POENG -->
<h1><?php echo $score ?> poeng</h1></p>
</center>

