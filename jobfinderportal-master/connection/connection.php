<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'job_web');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thực hiện truy vấn SQL
$sql = "SELECT uname, uemail, uphone FROM user";
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
                        <h4>' . $row['uname'] . '</h4>
                    </a>
                    <ul>
                        <li>Email: ' . $row['uemail'] . '</li>
                        <li>Phone: ' . $row['uphone'] . '</li>
                    </ul>
                </div>
            </div>
            <div class="f-right">
            <a class="btn btn-danger" href="edit.php?id=' . $row['uemail'] . '">Edit</a>
            <a class="btn btn-danger" href="delete.php?id=' . $row['uemail'] . '">Delete</a>
                                    </div>
        </div>';
    }
}
?>