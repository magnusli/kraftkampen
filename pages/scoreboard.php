<?php
//Neste side:
$neste_side = "index.php?page=pumpestats&user=$uid";
$neste_knapp = "0";



	$query = "SELECT * FROM scoreboard WHERE id = ( SELECT MAX(`id`) FROM `scoreboard` )";
	$result = mysql_query($query) or die(mysql_error());
	$num=mysql_numrows($result);
	$currentteam=mysql_result($result, $i, "id");

	$query = "SELECT * FROM scoreboard ORDER BY score DESC";
	$result = mysql_query($query) or die(mysql_error());
	$i = 1;
	while($row = mysql_fetch_array($result)) {
		
		if ($row[id] == $currentteam) {
			$place = $i;
			break;
		}
		$i++;
	}
	
	//Sjekker hvor mange oppdateringer av siden som er gjort. Dersom over 6, sendes klient tilbake til startsiden.
	$val= htmlspecialchars($_GET["val"]); //Henter val
	if ($val == "") {
		$val = 0;
	}
	$val++;
	if ($val > 6) {
		header( "refresh:0;url=index.php?page=start" );	//sender klient tilbake til introsiden
	} else {
		header( "refresh:5;url=index.php?page=scoreboard&val=$val" ); //Oppdaterer siden hvert 5 sek for nyeste scores. 
	}
?>

			<center>
		<p>Deres plassering: &nbsp;&nbsp;&nbsp;&nbsp;
		<b style="font-size:60px;">#<?php echo $place ?></p></b>
		
		<hr>
		</center>
		<center><p> Dagens toppliste <p><center>
		
		
		<table width="100%" border="0px">
		<tr>
		<center>
		<td><b>#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </td>
		<td><b>Lagnavn:</b></td>
		<td><b>Score:</b></td>
		
		<?php 
			mysql_set_charset("UTF8");
			header('Content-type: text/html; charset=utf-8');
			$query = "SELECT * FROM scoreboard ORDER BY score DESC LIMIT 10";
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
		<br><br>
		