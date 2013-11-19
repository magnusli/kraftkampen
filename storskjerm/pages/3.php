<?php
	header( "refresh:6;url=index.php?page=4" );
?>

<br><br><br><br><br><br><br><br><br><br>
<center>
	<div id="changeText" ><stort>Klar</stort></div>
    <script type="text/javascript">
    var text = ["<stort>ferdig</stort>", "<stort>PUMP!</stort>"];
    var counter = 0;
    var elem = document.getElementById("changeText");
    setInterval(change, 3020);
    function change() {
     elem.innerHTML = text[counter];
        counter++;
        if(counter >= text.length) { counter = 0; }
    }
	
    </script>
</center>

