<?php
	$uname = $_POST['uname'];
	$uemail = $_POST['uemail'];
	$upassword = $_POST['upassword'];

	// Database connection
	$conn = new mysqli('localhost','root','','job_website');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user(uname, uemail, upassword) values(?, ?, ?)");
		$stmt->bind_param("sss", $uname, $uemail, $upassword);
		$execval = $stmt->execute();
		echo $execval;
		header('Location: loginform.php');
		$stmt->close();
		$conn->close();
	}
?>