<?php
$neste_side = "";
$neste_knapp = false;
?>

<br><br>
<center>
<img src="animasjoner/ventegif_transparent.gif" alt"Venter på resten av laget...">
</center>

<?php 
$stepid= htmlspecialchars($_GET["stepid"]);
$uid= htmlspecialchars($_GET["user"]);

//Setter boolean done til 1 for bruker
if ($stepid != "4") {
	mysql_query("UPDATE users SET done$stepid='1' WHERE id='$uid'") 
	or die(mysql_error()); 
}

//Resetter gamle "done's"
if ($stepid == "3") {
	mysql_query("UPDATE users SET done1='0', done2='0', done4='0'  WHERE id='$uid'") 
	or die(mysql_error()); 
} elseif ($stepid == "1") {
	mysql_query("UPDATE users SET done3='0' WHERE id='$uid'") 
	or die(mysql_error());
}

header( "refresh:0;url=index.php?page=wait&user=$uid&stepid=$stepid" );

 ?>




  


