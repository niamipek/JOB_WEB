<?php
session_start();

$get_jtype = '';
$get_jname = '';
$get_jsalary = '';
$get_jcompany = '';
$get_jlocation = '';
$get_uemail = '';

$error = '';

$conn = new mysqli('localhost', 'root', '', 'job_web');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    $get_jtype = $_GET['job_type'];
    $get_jname = $_GET['job_name'];
    $get_jsalary = $_GET['job_salary'];
    $get_jcompany = $_GET['job_company'];
    $get_jlocation = $_GET['job_location'];
    $get_uemail = $_GET['user_email'];

    // Delete SQL
    $sql = "INSERT INTO apply (uemail, jtype, jname, jsalary, jcompany, jlocation) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssssss", $get_uemail, $get_jtype, $get_jname, $get_jsalary, $get_jcompany, $get_jlocation);

    $stmt->execute();

    // Close statement and connection
    $stmt->close();
}
$conn->close();
    header('Location: job_listing.php');
exit();
?>