<?php
//Neste side:
$neste_side = "index.php?page=2";
$neste_knapp = false;

//Sjekker fremgang med database
$query="SELECT * FROM mainscreen WHERE id='1'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$steg=mysql_result($result,$i,"steg");
header( "refresh:5;url=index.php?page=$steg" );
	
	
?>

<center>
<!-- <img src="style/Walter_Samle_et_lag.png" width="70%" alt="Samle et lag og bli med på kraftkampen!"> -->
	<p style="font-size:55px; margin-top: 17px"> Samle et lag, skriv inn navn<br> på hver deres telefon og spill kraftkampen! </p>	
		<hr style="margin-top:-20px">
		<center><p style="font-size:38px; margin-top:20px"><b> Dagens toppscore</b> </p></center>
		<table width="100%" border="0px" style="margin-top: -30px">
		<tr>
		<center>
		<td><b>#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </td>
		<td><b>Lagnavn:</b></td>
		<td><b>Score:</b></td>
		
		<?php 
			mysql_set_charset("UTF8");
			header('Content-type: text/html; charset=utf-8');
			$query = "SELECT * FROM scoreboard ORDER BY score DESC LIMIT 5";
			$result = mysql_query($query) or die(mysql_error());
			$i = 1;
			while($row = mysql_fetch_array($result)) {
				echo "<tr>";
				echo "<td> $i. </td>";
				echo "<td> $row[name] </td>";
				echo "<td> $row[score] </td>";
				echo "</tr> ";
				$i++;
			}
		?>
	
		</table>
</center>

