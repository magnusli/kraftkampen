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
		<br><br><br><br>
		<center>
		<p>Deres plassering:</p>
		<br><br>
		<stort>
		#<?php echo $place ?>
		</stort>
		</center>