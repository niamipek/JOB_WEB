<?php
session_start();

$user = '';
$old_password = '';
$new_password = '';
$confirm_password = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_SESSION['user'];
  $old_password = $_POST['old_password'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];

  // Kiểm tra xem mật khẩu cũ của người dùng có đúng hay không
  $conn = new mysqli('localhost', 'root', '', 'job_web');
  if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
  } else {
    $stmt = $conn->prepare("SELECT upassword FROM user WHERE uemail = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($stored_password);
    $stmt->fetch();

    if ($stmt->num_rows <= 0 || $stored_password !== $old_password) {
      $error = 'Invalid old password';
    } else {
      // Kiểm tra xem mật khẩu mới và xác nhận mật khẩu có khớp hay không
      if ($new_password !== $confirm_password) {
        $error = 'New password and confirm password do not match';
      } else {
        // Cập nhật mật khẩu mới trong cơ sở dữ liệu
        $stmt = $conn->prepare("UPDATE user SET upassword = ? WHERE uemail = ?");
        $stmt->bind_param("ss", $new_password, $user);
        $stmt->execute();

        // Đăng xuất người dùng và chuyển hướng đến trang đăng nhập
        session_destroy();
        header('Location: loginform.php');
        exit();
      }
    }

    $stmt->close();
    $conn->close();
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
          <div class="title">Change Password</div>
          <form action="#" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="old_password" name="old_password" type="password" placeholder="Enter your old password"
                  required />
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="new_password" name="new_password" type="password" placeholder="Enter your new password"
                  required />
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="confirm_password" name="confirm_password" type="password"
                  placeholder="Confirm your new password" required />
              </div>
              <div class="input-box">

                <?php
                if (!empty($error)) {
                  echo "<div style='color: red' class='alert alert-danger'>$error</div>";
                }
                ?>
              </div>
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