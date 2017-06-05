<?php

include 'dbhandler.php';

$tableno = $_POST['tableno'];
$singledouble = $_POST['singledouble'];
$matchcat = $_POST['matchcat'];
$agegroup = $_POST['agegroup'];
$menwomen = $_POST['menwomen'];
$country1 = $_POST['country1'];
$country2 = $_POST['country2'];
$round1 = $_POST['round1'];
$round1win = $_POST['round1win'];
$round2 = $_POST['round2'];
$round2win = $_POST['round2win'];
$round3 = $_POST['round3'];
$round3win = $_POST['round3win'];
$round4 = $_POST['round4'];
$round4win = $_POST['round4win'];
$round5 = $_POST['round5'];
$round5win = $_POST['round5win'];
$matchwinner = $_POST['matchwinner'];


	$sql = "INSERT INTO matchresult(singledouble, matchcat, agegroup, menwomen, country1, country2, round1, round1win, round2, round2win, round3, round3win, round4, round4win, round5, round5win, matchwinner ) 
		VALUES ('$singledouble', '$matchcat', '$agegroup','$menwomen','$country1','$country2','$round1','$round1win','$round2','$round2win','$round3','$round3win','$round4','$round4win','$round5','$round5win','$matchwinner')";
		$result = $conn->query($sql);


	
	

		
		$sql = "UPDATE tableresult
		SET
		singledouble='$singledouble', matchcat='$matchcat', agegroup='$agegroup', menwomen='$menwomen', country1='$country1', country2='$country2', round1='$round1', round1win='$round1win', round2='$round2', round2win='$round2win', round3='$round3', round3win='$round3win', round4='$round4', round4win='$round4win', round5='$round5', round5win='$round5win', matchwinner='$matchwinner'
		WHERE
		tableno='$tableno'";
		
		$result = $conn->query($sql);

		header("Location: ../subadmin/table1.php");






