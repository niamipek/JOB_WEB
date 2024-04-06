<?php

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'job_web');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
            <input id="jtype" name="jtype" type="text" value="' . $row['jtype'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-briefcase"></i>
            <input id="jname" name="jname" type="text" value="' . $row['jname'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-money-bill"></i>
            <input id="jsalary" name="jsalary" type="number" value="' . $row['jsalary'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-building"></i>
            <input id="jcompany" name="jcompany" type="text" value="' . $row['jcompany'] . '" required/>
        </div>
        <div class="input-box">
            <i class="fas fa-map-marker-alt"></i>
            <input id="jlocation" name="jlocation" type="text" value="' . $row['jlocation'] . '" required/>
        </div>
        ';
        }
    }

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>