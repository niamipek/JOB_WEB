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
            $user = $_GET['id'];

            $stmt_select_job = $conn->prepare("SELECT jtype, jname, jsalary, jcompany, jlocation FROM job WHERE uemail = ?");
            $stmt_select_job->bind_param("s", $user);
            $stmt_select_job->execute();
            $stmt_select_job->store_result();
            $stmt_select_job->bind_result($jtype, $jname, $jsalary, $jcompany, $jlocation);

            // Xóa bản ghi từ bảng JOB có uemail = 'boithuy@gmail.com12'
            $stmt_delete_job = $conn->prepare("DELETE FROM JOB WHERE uemail=?");
            $stmt_delete_job->bind_param("s", $user);
            $stmt_delete_job->execute();
            $stmt_delete_job->close();

            // Cập nhật bản ghi trong bảng USER từ uemail = 'boithuy@gmail.com12' thành 'D@S'
            $stmt_update_user = $conn->prepare("UPDATE USER SET uname = ?, uemail = ?, uphone = ? WHERE uemail=?");
            $stmt_update_user->bind_param("ssss", $uname, $uemail, $uphone,  $user);
            $stmt_update_user->execute();
            $stmt_update_user->close();

            // Thêm bản ghi mới vào bảng JOB
            // Duyệt qua kết quả từ truy vấn SELECT
            if ($stmt_select_job->fetch()) {
                // Nếu có kết quả, tiến hành chèn giá trị vào bảng JOB
                $stmt_insert_job = $conn->prepare("INSERT INTO JOB VALUES (?, ?, ?, ?, ?, ?)");
                $stmt_insert_job->bind_param("ssssss", $jtype, $jname, $jsalary, $jcompany, $jlocation, $uemail);
                $stmt_insert_job->execute();
                $stmt_insert_job->close();
            } else {
                echo "Không tìm thấy dữ liệu trong bảng job cho uemail: $uemail";
            }

            $conn->close();

            header('Location: manageaccount.php');
            exit();
        } else {
            $user = $_SESSION['user'];

            $stmt_select_job = $conn->prepare("SELECT jtype, jname, jsalary, jcompany, jlocation FROM job WHERE uemail = ?");
            $stmt_select_job->bind_param("s", $user);
            $stmt_select_job->execute();
            $stmt_select_job->store_result();
            $stmt_select_job->bind_result($jtype, $jname, $jsalary, $jcompany, $jlocation);

            $stmt_delete_job = $conn->prepare("DELETE FROM JOB WHERE uemail=?");
            $stmt_delete_job->bind_param("s", $user);
            $stmt_delete_job->execute();
            $stmt_delete_job->close();

            $stmt_update_user = $conn->prepare("UPDATE USER SET uname = ?, uemail = ?, uphone = ? WHERE uemail=?");
            $stmt_update_user->bind_param("ssss", $uname, $uemail, $uphone,  $user);
            $stmt_update_user->execute();
            $stmt_update_user->close();

            // Thêm bản ghi mới vào bảng JOB
            // Duyệt qua kết quả từ truy vấn SELECT
            if ($stmt_select_job->fetch()) {
                // Nếu có kết quả, tiến hành chèn giá trị vào bảng JOB
                $stmt_insert_job = $conn->prepare("INSERT INTO JOB VALUES (?, ?, ?, ?, ?, ?)");
                $stmt_insert_job->bind_param("ssssss", $jtype, $jname, $jsalary, $jcompany, $jlocation, $uemail);
                $stmt_insert_job->execute();
                $stmt_insert_job->close();
            } else {
                echo "Không tìm thấy dữ liệu trong bảng job cho uemail: $uemail";
            }

            $conn->close();

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
                            include ('connection/connect_edit_job.php');
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