<?php

session_start();
$conn = new mysqli('localhost', 'root', '', 'job_website');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user'])) {
    $user_profile = $_SESSION['user'];
    // Thực hiện truy vấn SQL sử dụng prepare statement để tránh SQL Injection
    $stmt = $conn->prepare("SELECT uname, uemail, uphone FROM user WHERE uemail = ?");
    $stmt->bind_param("s", $user_profile);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html = "<div class='card mb-3'>
        <div class='card-body'>
            <div class='row'>
                <div class='col-sm-3'>
                    <h6 class='mb-0'>Full Name</h6>
                </div>
                <div class='col-sm-9 text-secondary'>
                    {$row['uname']}
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-3'>
                    <h6 class='mb-0'>Email</h6>
                </div>
                <div class='col-sm-9 text-secondary'>
                    {$row['uemail']}
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-3'>
                    <h6 class='mb-0'>Phone</h6>
                </div>
                <div class='col-sm-9 text-secondary'>
                    {$row['uphone']}
                </div>
            </div>
        </div>
    </div>";
            echo $html;
        }
    }
    $stmt->close();
} else {
    echo "Please login first.";
}
?>
