<?php
// Kết nối cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'job_website');
$company = $_POST['company'];
$location = $_POST['location'];
print_r($_POST["company"]);
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Truy vấn các công việc tương ứng với công ty và vị trí
$sql = "SELECT * FROM job WHERE jcompany = '$company' AND jlocation = '$location'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Bắt đầu tạo bảng HTML
    echo "<table border='1'>
            <tr>
                <th>Job Name</th>
                <th>Salary</th>
                <th>Company</th>
                <th>Location</th>
                <th>Type</th>
            </tr>";

    // Lặp qua các dòng kết quả và hiển thị trên bảng
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['jname'] . "</td>";
        echo "<td>" . $row['jsalary'] . "</td>";
        echo "<td>" . $row['jcompany'] . "</td>";
        echo "<td>" . $row['jlocation'] . "</td>";
        echo "<td>" . $row['jtype'] . "</td>";
        echo "</tr>";
    }

    // Kết thúc bảng HTML
    echo "</table>";
} else {
    // Nếu không có công việc nào tương ứng, hiển thị thông báo
    echo "Không có công việc tương ứng";
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
