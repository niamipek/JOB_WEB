<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'job_web');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thực hiện truy vấn SQL
$sql = "SELECT * FROM job";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user'] == 'admin') {
            while ($row = $result->fetch_assoc()) {
                echo '
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
                        <li>Type:<b> ' . $row['jtype'] . '</b></li>
                        <li>Salary:<b> ' . $row['jsalary'] . '</b></li>
                        <li>Company:<b> ' . $row['jcompany'] . '</b></li>
                        <li>Location:<b> ' . $row['jlocation'] . '</b></li> 
                    </ul>
                </div>
            </div>
            <div style="margin-top: 20px;">
                <a class="btn btn-danger" href="edit_job.php?user_email=' . $row['uemail'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                    '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Edit</a>

                <a class="btn btn-danger" href="delete_job.php?user_email=' . $row['uemail'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                    '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Delete</a>
            </div>
        </div>';
            }
        } else {
            while ($row = $result->fetch_assoc()) {
                echo '
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
                        <li>Type:<b> ' . $row['jtype'] . '</b></li>
                        <li>Salary:<b> ' . $row['jsalary'] . '</b></li>
                        <li>Company:<b> ' . $row['jcompany'] . '</b></li>
                        <li>Location:<b> ' . $row['jlocation'] . '</b></li>
                        <li><a class="btn btn-danger" href="edit.php?user_email=' . $row['uemail'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                    '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Apply</a></li>
                    </ul>
                </div>
            </div>
            <div>
                
            </div>
        </div>';
            }
        }
    }
}
?>