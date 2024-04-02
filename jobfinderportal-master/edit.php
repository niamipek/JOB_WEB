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
        // Cập nhật thông tin người dùng trong cơ sở dữ liệu
        if ($_SESSION['user'] == 'admin') {
            // Lấy email từ session của admin
            $adminEmail = $_GET['id'];

            $stmt = $conn->prepare("UPDATE user SET uname = ?, uemail = ?, uphone = ? WHERE uemail = ?");
            $stmt->bind_param("ssss", $uname, $uemail, $uphone, $adminEmail);
            $stmt->execute();
            $stmt->close();
            $conn->close();

            // Redirect admin to manage account page
            header('Location: manageaccount.php');
            exit();
        } else {
            // Lấy email từ GET nếu không phải admin
            $user = $_SESSION['user'];

            $stmt = $conn->prepare("UPDATE user SET uname = ?, uemail = ?, uphone = ? WHERE uemail = ?");
            $stmt->bind_param("ssss", $uname, $uemail, $uphone, $user);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            // Sau khi thực hiện cập nhật email
            $_SESSION['user'] = $uemail; // Cập nhật email mới trong session

// Tiếp tục với các bước xử lý khác hoặc chuyển hướng đến trang khác


            // Redirect regular user to profile page
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