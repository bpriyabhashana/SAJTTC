<?php

include 'dbhandler.php';

$id = $_POST['id'];
$gold = $_POST['gold'];
$silver = $_POST['silver'];
$bronz = $_POST['bronz'];
$points = $_POST['points'];


	
		
		$sql = "UPDATE leaderboard
		SET
		gold='$gold', silver='$silver', bronz='$bronz', points='$points'
		WHERE
		id='$id'";
		
		$result = $conn->query($sql);

		header("Location: ../subadmin/table1.php");






