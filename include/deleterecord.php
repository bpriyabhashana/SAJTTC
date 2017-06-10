<?php

include 'dbhandler.php';

$matchid = $_POST['matchid'];


	
		
		$sql = "DELETE FROM matchresult
	
		WHERE tableno='$matchid'";
		
		$result = $conn->query($sql);

		header("Location: ../subadmin/table1.php");
