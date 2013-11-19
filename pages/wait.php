<?php
$neste_side = "";
$neste_knapp = false;

$stepid= htmlspecialchars($_GET["stepid"]);
$uid= htmlspecialchars($_GET["user"]);

require "inc/check_if_done.php";
//header( "refresh:5;url=inc/check_if_done.php" );

 ?>
