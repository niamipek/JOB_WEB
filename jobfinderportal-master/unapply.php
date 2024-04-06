<?php
session_start();

$get_jtype = $_GET['job_type'];
$get_jname = $_GET['job_name'];
$get_jsalary = $_GET['job_salary'];
$get_jcompany = $_GET['job_company'];
$get_jlocation = $_GET['job_location'];
$get_uemail = $_GET['user_email'];

$conn = new mysqli('localhost', 'root', '', 'job_web');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Xóa dữ liệu từ bảng apply
    $sql = "DELETE FROM apply WHERE uemail = ? AND jtype = ? AND jname = ? AND jsalary = ? AND jcompany = ? AND jlocation = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $get_uemail, $get_jtype, $get_jname, $get_jsalary, $get_jcompany, $get_jlocation);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

// Điều hướng người dùng trở lại trang danh sách công việc sau khi unapply
header('Location: profile.php');
exit();
?>
