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
                        <h4>' . $row['jname'] . '</h4>
                    </a>
                    <ul>
                    <li>Type:<b> ' . $row['jtype'] . '</b></li>
                    <li>Salary:<b> ' . $row['jsalary'] . '</b></li>
                    <li>Company:<b> ' . $row['jcompany'] . '</b></li>
                    <li>Location:<b> ' . $row['jlocation'] . '</b></li> 
                    </ul>
                </div>
            </div>
            <div class="f-right">
            <a class="btn btn-danger" href="edit_post.php?user_email=' . $_SESSION['user'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                                '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Edit</a>
            <a class="btn btn-danger" href="delete_job.php?user_email=' . $_SESSION['user'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                                '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Delete</a>
                                    </div>
        </div>
            </div>
        </div>';
            }
        } else {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="single-job-items mb-30">
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
                                <li>Location:<b> ' . $row['jlocation'] . '</b></li> ';
                // Kiểm tra xem người dùng đã apply cho công việc này chưa
                $check_sql = "SELECT * FROM apply WHERE uemail = ? AND jtype = ? AND jname = ? AND jsalary = ? AND jcompany = ? AND jlocation = ?";
                $check_stmt = $conn->prepare($check_sql);
                $check_stmt->bind_param("ssssss", $_SESSION['user'], $row['jtype'], $row['jname'], $row['jsalary'], $row['jcompany'], $row['jlocation']);
                $check_stmt->execute();
                $result_check = $check_stmt->get_result();
            
                if ($result_check->num_rows > 0) {
                    // Nếu người dùng đã apply, hiển thị thông báo
                    echo "<li>You have applied</li>";
                } else {
                    // Nếu chưa apply, hiển thị nút "Apply"
                    echo '<li><a class="btn btn-danger" href="apply.php?user_email=' . $_SESSION['user'] . '&job_type=' . $row['jtype'] . '&job_name=' . $row['jname'] .
                                '&job_salary=' . $row['jsalary'] . '&job_company=' . $row['jcompany'] . '&job_location=' . $row['jlocation'] . '">Apply</a></li>';
                }
            
                // Đóng kết nối cho truy vấn kiểm tra
                $check_stmt->close();
            
                // Đóng thẻ UL và các thẻ DIV phía dưới
                echo '</ul>
                    </div>
                </div>
                <div></div>
                </div>';
            }
            
        }
    }else{
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
    </div>
        </div>
    </div>';
        }
    }
}
?>