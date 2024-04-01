<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] == 'admin') {
        $html = '<li id="login"><a href="#"><img width=30px height=30px src="Doc\img\group.png" alt="User Information"></a>
                                                                <ul class="submenu">
                                                                    <li><a href="manageaccount.php"><b>Manage User</b></a></li>
                                                                    <li id="login"><a href="logout.php">Logout</a></li>
                                                                </ul>
                                                            </li>';
        echo $html;
    } else {
        $html = '<li id="login"><a href="#"><img width=30px height=30px src="Doc\img\user (1).png" alt="User Information"></a>
                                                                <ul class="submenu">
                                                                    <li><a href="profile.php">Manage Profile</a></li>
                                                                    <li id="login"><a href="logout.php">Logout</a></li>
                                                                </ul>
                                                            </li>';
        echo $html;
    }
} else {
    echo '<li id="login"><a href="loginform.php">Login / Register</a></li>';
}
