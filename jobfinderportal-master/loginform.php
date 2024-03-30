<?php
session_start();

if (isset($_SESSION['user'])) {
  header('Location: index.php');
  die();
}

$user = '';
$pass = '';
$error = '';


$conn = new mysqli('localhost', 'root', '', 'job_website');
if ($conn->connect_error) {
  die("Connection Failed : " . $conn->connect_error);
} else {
  if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user === 'admin@gmail.com' && $pass === '321') {
      $_SESSION['user'] = 'admin';
      header('Location: index.php');
    } else {
      $stmt = $conn->prepare("SELECT * FROM user WHERE uemail = ? AND upassword = ?");
      $stmt->bind_param("ss", $user, $pass);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows <= 0) {
        $error = 'Invalid username or password';
      } else if ($result->num_rows > 0) {
        $_SESSION['user'] = $user;
        header('Location: index.php');
      }
      $stmt->close();
      $conn->close();
    }


  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Login and Registration Form in HTML & CSS | CodingLab</title>
  <link rel="stylesheet" href="assets\css\login_style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <input type="checkbox" id="flip" />
    <div class="cover">
      <div class="front">
        <img src="Doc\img\frontImg.jpg" alt="" />
      </div>
      <div class="back">
        <!--<img class="backImg" src="img/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br />
            with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>
          <form action="#" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input name="user" value="<?= $user ?>" id="useremail" type="email" placeholder="Enter your email"
                  required />
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input name="pass" value="<?= $pass ?>" id="password" type="password" placeholder="Enter your password"
                  required />
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
              <div class="text sign-up-text">
                Don't have an account? <label for="flip">Sign up now</label>
              </div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Sign Up</div>
          <form action="register.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input id="uname" name="uname" type="text" placeholder="Enter your name" required />
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input id="uemail" name="uemail" type="email" placeholder="Enter your email" required />
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="upassword" name="upassword" type="password" placeholder="Enter your password" required />
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" />
              </div>
              <div class="text sign-up-text">
                Already have an account? <label for="flip">Login now</label>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>