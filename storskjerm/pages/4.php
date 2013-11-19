<br><br>
<center>
	
	<!-- SETT INN BILDE AV WALTER -->
	<stort> PUMP! </stort>
	<h1 id="time" style="font-size:250px; margin-top:18px">
		<label id="seconds">00</label>:<label id="deci">0</label>
	</h1>
		<script type="text/javascript">
			var secondsLabel = document.getElementById("seconds");
			var deciLabel = document.getElementById("deci");
			var totaldeci = 0;
			setInterval(setTime, 10);

			function setTime(){
				++totaldeci;
				deciLabel.innerHTML = pad(totaldeci%100);
				secondsLabel.innerHTML = pad(parseInt(totaldeci/100));
				
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

<?php
header( "refresh:0;url=index.php?page=wait" );
?>