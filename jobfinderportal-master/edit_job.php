<?php
session_start();

$jtype = '';
$jname = '';
$jsalary = '';
$jcompany = '';
$jlocation = '';
$uemail = '';

$get_jtype = '';
$get_jname = '';
$get_jsalary = '';
$get_jcompany = '';
$get_jlocation = '';
$get_uemail = '';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jtype = $_POST['jtype'];
    $jname = $_POST['jname'];
    $jsalary = $_POST['jsalary'];
    $jcompany = $_POST['jcompany'];
    $jlocation = $_POST['jlocation'];

    $conn = new mysqli('localhost', 'root', '', 'job_web');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        if ($_SESSION['user'] == 'admin') {
            $get_jtype = $_GET['job_type'];
            $get_jname = $_GET['job_name'];
            $get_jsalary = $_GET['job_salary'];
            $get_jcompany = $_GET['job_company'];
            $get_jlocation = $_GET['job_location'];
            $get_uemail = $_GET['user_email'];


            $sql = "UPDATE job SET jtype=?, jname=?, jsalary=?, jcompany=?, jlocation=?
            WHERE jtype=? AND jname=? AND jsalary=? AND jcompany=? AND jlocation=?";
            $stmt = $conn->prepare($sql);

            // Bind parameters
            $stmt->bind_param("ssssssssss", $jtype, $jname, $jsalary, $jcompany, $jlocation, $get_jtype, $get_jname, $get_jsalary, $get_jcompany, $get_jlocation);

            $stmt->execute();

            // Close statement and connection
            $stmt->close();

            $conn->close();

            header('Location: job_listing.php');
            exit();
        } else {
            if ($_GET['user_email'] ===  $_SESSION['user']) {
            $get_jtype = $_GET['job_type'];
            $get_jname = $_GET['job_name'];
            $get_jsalary = $_GET['job_salary'];
            $get_jcompany = $_GET['job_company'];
            $get_jlocation = $_GET['job_location'];
            $get_uemail = $_GET['user_email'];


            $sql = "UPDATE job SET jtype=?, jname=?, jsalary=?, jcompany=?, jlocation=?
            WHERE jtype=? AND jname=? AND jsalary=? AND jcompany=? AND jlocation=? AND uemail=?";
            $stmt = $conn->prepare($sql);

            // Bind parameters
            $stmt->bind_param("sssssssssss", $jtype, $jname, $jsalary, $jcompany, $jlocation, $get_jtype, $get_jname, $get_jsalary, $get_jcompany, $get_jlocation, $get_uemail);

            $stmt->execute();

            // Close statement and connection
            $stmt->close();

            $conn->close();
            }
            header('Location: profile.php');
            exit();
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Login and Registration Form in HTML & CSS | CodingLab</title>
    <link rel="stylesheet" href="assets\css\tmp.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container">
        <div class="forms">
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Edit Profile</div>
                    <form action="#" method="post">
                        <div class="input-boxes">
                            <?php
                            include ('connection/connect_edit_job.php');
                            ?>
                            <div class="button input-box">
                                <input type="submit" value="Sumbit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>