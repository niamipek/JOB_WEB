<?php
$conn = new mysqli('localhost', 'root', '', 'job_web');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user'])) {
    $user_profile = $_SESSION['user'];
    // Thực hiện truy vấn SQL sử dụng prepare statement để tránh SQL Injection
    $stmt = $conn->prepare("SELECT jtype, jname, jsalary, jcompany, jlocation FROM apply WHERE uemail = ?");
    $stmt->bind_param("s", $user_profile);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html = "<div class='single-job-items mb-30'>
            <div class='job-items'>
                <div class='company-img'>
                    <a href='job_details.php'><img src='assets/img/icon/job-list1.png'
                            alt=''></a>
                </div>
                <div class='job-tittle'>

                    <a href='job_details.php'>
                        <h4 style='margin-bottom: 30px; margin-top:30px'>" . $row['jname'] . "</h4>
                    </a>
                    <ul>
                        <li><i class='fas fa-hourglass-half'></i>" . $row['jtype'] . "</li>
                        <li><i class='fas fa-building'></i>" . $row['jcompany'] . "</li>
                        <li><i class='fas fa-dollar-sign'></i>" . $row['jsalary'] . "</li>
                        <li><i class='fas fa-map-marker-alt'></i>" . $row['jlocation'] . "</li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>";
            echo $html;
        }
    }
    $stmt->close();
} else {
    echo "Please login first.";
}
?>