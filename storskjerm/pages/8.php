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
	

?>


		<br>
		<center><h1> Dagens toppliste </h1><center>
		
		
		<table width="100%" border="0px">
		<tr>
		<center>
		<td><b>#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </td>
		<td><b>Lagnavn:</b></td>
		<td><b>Score:</b></td>
		
		<?php 
			mysql_set_charset("UTF8");
			header('Content-type: text/html; charset=utf-8');
			$query = "SELECT * FROM scoreboard ORDER BY score DESC LIMIT 8";
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