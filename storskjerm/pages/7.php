<?php

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
	mysql_query("UPDATE mainscreen SET steg='0'") 	//Setter steg tilbake til 0 slik at nytt spill kan starte
	or die(mysql_error()); 
	header( "refresh:15;url=index.php?page=0" );	//sender klient tilbake til introsiden
?>

			<center>
		<p>Deres plassering: &nbsp;&nbsp;&nbsp;&nbsp;
		<b style="font-size:60px;">#<?php echo $place ?></p></b>
		
		<hr>
		</center>
		<center><p> Topp 5 i dag: <p><center>
		
		
		<table width="100%" border="0px">
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