<?php
session_start();

$user = '';
$uname = '';
$uemail = '';
$uphone = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $uphone = $_POST['uphone'];

    $conn = new mysqli('localhost', 'root', '', 'job_web');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        if ($_SESSION['user'] == 'admin') {
            // Lấy id của người dùng từ tham số id trong URL
            $user = $_GET['id'];

            // Lưu trữ tất cả các công việc của người dùng vào một mảng
            $jobs = array();

            // Truy vấn để lấy các công việc của người dùng dựa trên id
            $stmt_select_job = $conn->prepare("SELECT jtype, jname, jsalary, jcompany, jlocation FROM job WHERE uemail = ?");
            $stmt_select_job->bind_param("s", $user);
            $stmt_select_job->execute();
            $stmt_select_job->store_result();
            $stmt_select_job->bind_result($jtype, $jname, $jsalary, $jcompany, $jlocation);

            // Duyệt qua kết quả truy vấn
            while ($stmt_select_job->fetch()) {
                $jobs[] = array('jtype' => $jtype, 'jname' => $jname, 'jsalary' => $jsalary, 'jcompany' => $jcompany, 'jlocation' => $jlocation);
            }

            // Đóng kết nối để chuẩn bị cho việc thực hiện các truy vấn khác
            $stmt_select_job->close();

            // Xóa tất cả các công việc của người dùng từ bảng JOB
            $stmt_delete_job = $conn->prepare("DELETE FROM job WHERE uemail = ?");
            $stmt_delete_job->bind_param("s", $user);
            $stmt_delete_job->execute();
            $stmt_delete_job->close();

            // Cập nhật thông tin người dùng trong bảng USER
            $stmt_update_user = $conn->prepare("UPDATE user SET uname = ?, uemail = ?, uphone = ? WHERE uemail = ?");
            $stmt_update_user->bind_param("ssss", $uname, $uemail, $uphone, $user);
            $stmt_update_user->execute();
            $stmt_update_user->close();

            // Thêm lại tất cả các công việc đã lưu trữ vào bảng JOB với email mới
            foreach ($jobs as $job) {
                $stmt_insert_job = $conn->prepare("INSERT INTO job (jtype, jname, jsalary, jcompany, jlocation, uemail) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt_insert_job->bind_param("ssssss", $job['jtype'], $job['jname'], $job['jsalary'], $job['jcompany'], $job['jlocation'], $uemail);
                $stmt_insert_job->execute();
                $stmt_insert_job->close();
            }

            // Đóng kết nối
            $conn->close();
            // Chuyển hướng người dùng về trang manageaccount.php
            header('Location: manageaccount.php');
            exit();
        } else {
            $user = $_SESSION['user'];

            // Lưu trữ tất cả các công việc của người dùng vào một mảng
            $jobs = array();

            $stmt_select_job = $conn->prepare("SELECT jtype, jname, jsalary, jcompany, jlocation FROM job WHERE uemail = ?");
            $stmt_select_job->bind_param("s", $user);
            $stmt_select_job->execute();
            $stmt_select_job->store_result();
            $stmt_select_job->bind_result($jtype, $jname, $jsalary, $jcompany, $jlocation);

            while ($stmt_select_job->fetch()) {
                $jobs[] = array('jtype' => $jtype, 'jname' => $jname, 'jsalary' => $jsalary, 'jcompany' => $jcompany, 'jlocation' => $jlocation);
            }

            $stmt_select_job->close();

            // Xóa tất cả các công việc của người dùng từ bảng JOB
            $stmt_delete_job = $conn->prepare("DELETE FROM JOB WHERE uemail=?");
            $stmt_delete_job->bind_param("s", $user);
            $stmt_delete_job->execute();
            $stmt_delete_job->close();

            // Update thông tin người dùng
            $stmt_update_user = $conn->prepare("UPDATE USER SET uname = ?, uemail = ?, uphone = ? WHERE uemail=?");
            $stmt_update_user->bind_param("ssss", $uname, $uemail, $uphone, $user);
            $stmt_update_user->execute();
            $stmt_update_user->close();

            // Thêm lại tất cả các công việc đã lưu trữ vào bảng JOB
            foreach ($jobs as $job) {
                $stmt_insert_job = $conn->prepare("INSERT INTO JOB VALUES (?, ?, ?, ?, ?, ?)");
                $stmt_insert_job->bind_param("ssssss", $job['jtype'], $job['jname'], $job['jsalary'], $job['jcompany'], $job['jlocation'], $uemail);
                $stmt_insert_job->execute();
                $stmt_insert_job->close();
            }

            // Cập nhật session với email mới
            $_SESSION['user'] = $uemail;

            // Đóng kết nối
            $conn->close();

            // Chuyển hướng người dùng về trang profile.php
            header('Location: profile.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Login and Registration Form in HTML & CSS | CodingLab</title>
    <link rel="stylesheet" href="assets\css\tmp.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container">
        <div class="forms">
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Edit Profile</div>
                    <form action="#" method="post">
                        <div class="input-boxes">
                            <?php
                            include ('connection/connect_edit.php');
                            ?>
                            <div class="button input-box">
                                <input type="submit" value="Sumbit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>