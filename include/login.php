<?php



session_start();


include 'dbhandler.php';

$root = $_POST['root'];
$uname = $_POST['uname'];
$password = $_POST['password'];


//table 1




if (empty($uname)) {
	header("Location: ../formPage/login.php?error=empty");
	exit();
}

if (empty($root)) {
	header("Location: ../formPage/login.php?error=empty");
	exit();
}



if (empty($password)) {
	header("Location: ../formPage/login.php?error=empty");
	exit();
}

if ($root=='root') {
	$sql = "SELECT * FROM subadmin WHERE uname = '$uname' AND password='$password'";
$result = $conn->query($sql);



 
if (!$row = $result->fetch_assoc()) { 
	header("Location: ../formPage/login.php?error=notmatch");
	exit();
	
}
else{
	$_SESSION['uname']= $row['uname'];
	header("Location: ../subadmin/table1.php");
}

}



//if not enter table






 