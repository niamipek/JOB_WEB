<?php
// Kết nối cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'job_web');

$location = $_POST['location'];

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Truy vấn các công việc tương ứng với công ty và vị trí
$sql = "SELECT * FROM job WHERE  jlocation = '$location'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="single-job-items mb-30">
            <div class="job-items">
                <div class="company-img">
                    <a href="#"><img width=75px height=auto src="Doc\img\user_list.png" alt=""></a>
                </div>
                <div class="job-tittle job-tittle2">
                    <a href="#">
                    <h4>' . $row['jname'] . ' (' . $row['jtype'] . ')'  .'</h4>
                
                    </a>
                    <ul>
                        
                        <li>Salary:<b> ' . $row['jsalary'] . '</b></li>
                        <li>Company:<b> ' . $row['jcompany'] . '</b></li>
                        <li>Location:<b> ' . $row['jlocation'] . '</b></li>
                        <li>Email:<b> ' . $row['uemail'] . '</b></li>
                    </ul>
                </div>
            </div>
            <div>
                <a class="btn btn-danger" href="edit.php?user_email=' . $row['uemail'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                 '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Edit</a>

                <a class="btn btn-danger" href="delete.php?user_email=' . $row['uemail'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                 '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Delete</a>
            </div>
        </div>';
    }
} 

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
