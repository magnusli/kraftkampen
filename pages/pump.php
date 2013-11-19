<?php
//Neste side:
$neste_side = "index.php?page=wait_info&user=$uid&stepid=4";
$neste_knapp = "0";
?>

<center>

<img src="style/folg_videre_paa_storskjerm.png" width="100%" alt"Gjør dere klare til å pumpe! (Klikk videre om du er ferdig med pumping)">
</center> 

<?php
	header( "refresh:0;url=index.php?page=wait&user=$uid&stepid=4" );
?>
