<?php
	//Index for å administrere "wizard"-funksjonalitet
	
	require '../config.php';
	require '../dbconnect.php';
	
	$query="SELECT * FROM teams WHERE id='1'";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$user1=mysql_result($result,$i,"user1");
	$user2=mysql_result($result, $i, "user2");
	$user3=mysql_result($result, $i, "user3");
	$user4=mysql_result($result, $i, "user4");
	$score=mysql_result($result, $i, "score");

?>

<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
	<title> Kraftkampen </title>
	<style type="text/css">
	
	</style>
	</head>
	
	<body>

		<div id="frame">
		
			<div id="content">
			
				<center>

				<h1 style="margin-top:0px">The wiz</h1>
				<hr>
				<p style="margin-top:0px"><b>Lag: </b> </p>
				
				<p style="font-size: 25px">
				<?php 
				if (empty($user1)) {
					echo "<form action='add_user.php?user=1' method='POST'  /> <input placeholder='Venter på deltaker..' type='text' name='ny' /> </form>";
				} else {
					echo "<br>$user1 <a href=clear_user.php?uid=1>X</a>";
				}
				
				if (empty($user2)) {
					echo "<form action='add_user.php?user=2' method='POST'  /> <input placeholder='Venter på deltaker..' type='text' name='ny' /> </form>";
				} else {
					echo "<br>$user2 <a href=clear_user.php?uid=2>X</a>";
				}
				
				if (empty($user3)) {
					echo "<form action='add_user.php?user=3' method='POST'  /> <input placeholder='Venter på deltaker..' type='text' name='ny' /> </form>";
				} else {
					echo "<br>$user3 <a href=clear_user.php?uid=3>X</a>";
				}
				
				if (empty($user4)) {
					echo "<form action='add_user.php?user=4' method='POST'  /> <input placeholder='Venter på deltaker..' type='text' name='ny' /> </form>";
				} else {
					echo "<br>$user4 <a href=clear_user.php?uid=4>X</a>";
				}
				echo "<br>";
				?>
				</p>

				<a href=reset.php > Resett alt! </a>
				</p>
				<hr>
				<p style="margin-top:0px"> <b>Pumping</b> </p>
				<a href="stop_timer.php"><b>Stopp teller</b></a>
				<p style="font-size: 25px">Skriv inn tidsbruk på pumping:</p>
				<form id="settime" action="add_pump_points.php" method="POST"  />
					<input type="text" name="sek" />
				</form>
				<a href="javascript:{}" onclick="document.getElementById('settime').submit(); return false;">Ok</a>
				
				</center> 
			</div>	
		</div>
	
	<div id="footer">
		<p> </p>
	</div>
</body>
</html>
