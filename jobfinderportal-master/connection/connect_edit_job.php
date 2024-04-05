<?php

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'job_web');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SESSION['user'] == 'admin') {
    $email = $_GET['user_email'];
    $job_type = $_GET['job_type'];
    $job_name = $_GET['job_name'];
    $job_salary = $_GET['job_salary'];
    $job_company = $_GET['job_company'];
    $job_location = $_GET['job_location'];

    // Thực hiện truy vấn SQL để lấy thông tin người dùng dựa trên ID
    $sql = "SELECT * FROM job WHERE uemail = '$email' AND jtype = '$job_type' AND jname = '$job_name' AND jsalary = '$job_salary' AND jcompany = '$job_company' AND jlocation = '$job_location'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
        <div class="input-box">
            <i class="fas fa-hourglass-half"></i>
            <input id="uname" name="uname" type="text" value="' . $row['jtype'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-briefcase"></i>
            <input id="uemail" name="uemail" type="email" value="' . $row['jname'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-money-bill"></i>
            <input id="uphone" name="uphone" type="tel" value="' . $row['jsalary'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-building"></i>
            <input id="uphone" name="uphone" type="tel" value="' . $row['jcompany'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-map-marker-alt"></i>
            <input id="uphone" name="uphone" type="tel" value="' . $row['jlocation'] . '" required/>
        </div>
        ';
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