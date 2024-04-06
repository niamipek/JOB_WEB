<?php
$conn = new mysqli('localhost', 'root', '', 'job_web');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user'])) {
    $user_profile = $_SESSION['user'];
    // Thực hiện truy vấn SQL sử dụng prepare statement để tránh SQL Injection
    $stmt = $conn->prepare("SELECT jtype, jname, jsalary, jcompany, jlocation, uemail FROM job WHERE uemail = ?");
    $stmt->bind_param("s", $user_profile);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html = '
            <div class="single-job-items mb-30">
                <div class="job-items">
                    <div class="company-img">
                        <a href="#"><img width=75px height=auto src="Doc\img\user_list.png" alt=""></a>
                    </div>
                    <div class="job-tittle job-tittle2">
                        <a href="#">
                            <h4 style="margin-top: 20px;">' . $row['jname'] . '</h4>
                        </a>
                        <ul>
                            <li><i class="fas fa-hourglass-half"></i>' . $row['jtype'] . '</li>
                        <li><i class="fas fa-building"></i>' . $row['jcompany'] . '</li>
                        <li><i class="fas fa-dollar-sign"></i>' . $row['jsalary'] . '</li>
                        <li><i class="fas fa-map-marker-alt"></i>' . $row['jlocation'] . '</li>
                        </ul>
                    </div>
                </div>
                <div style="margin-top: 20px;">
                    <a class="btn btn-danger" href="edit_job.php?user_email=' . $row['uemail'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                        '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Edit</a>
    
                    <a class="btn btn-danger" href="delete_job.php?user_email=' . $row['uemail'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                        '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Delete</a>
                </div>
            </div>
            <hr>';
            echo $html;
        }
    }
    $stmt->close();
} else {
    echo "Please login first.";
}
?>