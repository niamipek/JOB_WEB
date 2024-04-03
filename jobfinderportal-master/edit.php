<?php
session_start();

$user = '';
$uname = '';
$uemail = '';
$uphone = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $uphone = $_POST['uphone'];

    $conn = new mysqli('localhost', 'root', '', 'job_website');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        if ($_SESSION['user'] == 'admin') {
            $adminEmail = $_GET['id'];

            $stmt = $conn->prepare("UPDATE user U JOIN job J ON U.uemail_id = J.uemail SET U.uname = ?, U.uemail = ?, U.uphone = ?, J.uemail = ? WHERE uemail = ?");
            $stmt->bind_param("sssss", $uname, $uemail, $uphone, $uemail, $adminEmail);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('Location: manageaccount.php');
            exit();
        } else {
            $user = $_SESSION['user'];

            $stmt = $conn->prepare("UPDATE user U JOIN job J ON U.uemail = J.uemail SET U.uname = ?, U.uemail = ?, U.uphone = ?, J.uemail = ? WHERE uemail = ?");
            $stmt->bind_param("sssss", $uname, $uemail, $uphone, $uemail, $adminEmail);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            $_SESSION['user'] = $uemail;
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
                            include('connection/connect_edit.php');
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