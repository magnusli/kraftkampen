<?php
	header( "refresh:25;url=index.php?page=4" );
	mysql_query("UPDATE mainscreen SET steg='4' WHERE id='1'") 
	or die(mysql_error()); 
?>


<br><br>
<center>
	
	
	<h1> FINN DEG EN SPAK OG<br>GJØR DEG KLAR TIL Å PUMPE! </h1>
	
		<h1 id="time" style="font-size:250px; margin-top:10px">
		<label id="seconds">25</label> 
		<br><p style="margin-top: 5px">sekunder til dere skal pumpe!</p>
	</h1>
		<script type="text/javascript">
			var minutesLabel = document.getElementById("minutes");
			var secondsLabel = document.getElementById("seconds");
			var totalSeconds = 25;
			setInterval(setTime, 1000);

			function setTime(){
				--totalSeconds;
				secondsLabel.innerHTML = pad(totalSeconds%60);
				minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
			}

			function pad(val) {
				var valString = val + "";
				if(valString.length < 2) {
					return "0" + valString;
				} else {
					return valString;
				}
			}
		</script>
</center>
			
