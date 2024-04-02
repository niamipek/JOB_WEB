<?php

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'job_website');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SESSION['user'] == 'admin') {
    $email = $_GET['id'];

    // Thực hiện truy vấn SQL để lấy thông tin người dùng dựa trên ID
    $sql = "SELECT uname, uemail, uphone FROM user WHERE uemail = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
        <div class="input-box">
            <i class="fas fa-user"></i>
            <input id="uname" name="uname" type="text" value="' . $row['uname'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-envelope"></i>
            <input id="uemail" name="uemail" type="email" value="' . $row['uemail'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-phone"></i>
            <input id="uphone" name="uphone" type="tel" value="' . $row['uphone'] . '" required/>
        </div>';
        }
    }
} else {
    $email = $_SESSION['user'];

    // Thực hiện truy vấn SQL để lấy thông tin người dùng dựa trên ID
    $sql = "SELECT uname, uemail, uphone FROM user WHERE uemail = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="input-box">
                <i class="fas fa-user"></i>
                <input id="uname" name="uname" type="text" value="' . $row['uname'] . '" required/>
            </div>
            <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input id="uemail" name="uemail" type="email" value="' . $row['uemail'] . '" required/>
            </div>
            <div class="input-box">
                <i class="fas fa-phone"></i>
                <input id="uphone" name="uphone" type="tel" value="' . $row['uphone'] . '" required/>
            </div>';
        }
    }
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
