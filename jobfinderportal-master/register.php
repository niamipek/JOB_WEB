<?php
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$uphone = $_POST['uphone'];
$upassword = $_POST['upassword'];
if ($uemail  === 'admin@gmail.com') {
	echo '<script>alert("Invalid email"); window.location.href = "loginform.php";</script>';
} else {
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'job_web');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user(uname, uemail, uphone, upassword) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $uname, $uemail, $uphone, $upassword);
		$execval = $stmt->execute();
		echo $execval;
		header('Location: loginform.php');
		$stmt->close();
		$conn->close();
	}
}

?>