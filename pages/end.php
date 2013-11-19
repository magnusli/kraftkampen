<?php
$neste_side = "";
$neste_knapp = true;
require "inc/update_scoreboard.php";
?>

<?php 
$klar = "false";

do {

  $klar = "true";
  $result = mysql_query("SELECT done FROM users");
  $storeArray = Array();
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
      $storeArray[] =  $row['done'];
      echo $row['done'];
      $teller = $teller + $row['done'];
      
  }

  header( "Location: index.php?page=end&user=$uid" ) ;

} while($teller != "4");

echo "$klar";

?>

<center>
<h1> Bra jobbet! </h1>
<p> Til sammen har dere fått <?php echo $score ?> poeng! </p>
<p> <a href="">Gå til scoreboard</a> </p>
</center>