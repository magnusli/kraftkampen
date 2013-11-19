<?php 


	//Henter boolean 0/1 for hvor vidt har gått igjennom steg beskrevet i $stepid
	//Legger sammen antall som er ferdige
  $result = mysql_query("SELECT done$stepid FROM users");
  $storeArray = Array();
 while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
      $storeArray[] =  $row["done$stepid"];
      echo $row["done$stepid"];
      $teller = $teller + $row["done$stepid"];
      
 }

	//Sjekker om antall ferdige er under 4.
	//dersom true venter koden i antall sekunder og oppdaterer deretter siden for å sjekke på nytt.
 if ($teller < "4") {
	sleep(5);
	header( "Location: index.php?page=wait&user=$uid&stepid=$stepid" );
 } else { //Alle er klare og det sjekkes hvordan videre navigering skal foregå
	
	if ($stepid == "1") { //Intro
		$neste_side = "index.php?page=intro0&user=$uid";
		if ($uid == "1") { 
			mysql_query("UPDATE mainscreen SET steg='1'") 
			or die(mysql_error()); 
		}
		
	} elseif ($stepid == "2") { //Samarbeidsoppgaver 1
		$neste_side = "index.php?page=pump&user=$uid";
		if ($uid == "1") { 
			mysql_query("UPDATE mainscreen SET steg='2'") 
			or die(mysql_error()); 
		}
	
	} elseif ($stepid == "3") { //Samarbeidsoppgaver 2
		$neste_side = "index.php?page=scoreboard";
		if ($uid == "1") { 
			require "inc/update_scoreboard.php"; //Legger til laget i top-score liste
			mysql_query("UPDATE mainscreen SET steg='7'") 
			or die(mysql_error()); 
		}
	} elseif ($stepid == "4") { //Venting på pumpedata
		$neste_side = "index.php?page=pumpestats&user=$uid";
	
	} elseif ($stepid == "5") { //Venting etter individuell info 1
		$neste_side = "question.php?question=$cq1&user=$uid&qnr=1";
	
	} elseif ($stepid == "6") { //Venting etter individuell info 2
		$neste_side = "question.php?question=$cq2&user=$uid&qnr=2";
	
	}
	
	
	header( "Location: $neste_side" );
 }
?>
