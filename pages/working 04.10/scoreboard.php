<?php
//Neste side:
$neste_side = "index.php?page=pumpestats&user=$uid";
$neste_knapp = "0";
?>





	<center>
	<h1> Dagens beste </h1>
	<p>
	
	<table width="100%" border="0px">
	<tr>
	<center>
	<td><b>&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </td>
	<td><b>Lagnavn:</b></td>
	<td><b>Score:</b></td>
	
	<?php 
		mysql_set_charset("UTF8");
		header('Content-type: text/html; charset=utf-8');
		$query = "SELECT * FROM scoreboard ORDER BY score DESC LIMIT 7";
		$result = mysql_query($query) or die(mysql_error());
		$i = 1;
		while($row = mysql_fetch_array($result)) {
			echo "<tr>";
			echo "<td>&nbsp;&nbsp;&nbsp; $i </td>";
			echo "<td> $row[name]</td>";
			echo "<td> $row[score] </td>";
			echo "</tr> ";
			$i++;
		}
	?>
	</p>
	</table>
	</center>


