<?php
session_start();
if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost", "root", "localhost17");
    $db = mysqli_select_db($conn, "online_shop");
    $result = mysqli_query($conn, "SELECT * FROM users");
    while ($row = mysqli_fetch_array($result)) {
        $user = $row['username'];
        $type = $row['user_type'];
        $pass = $row['password'];

        if ($user == $username && $type == 'admin' && $pass == $password) {
            header("location:adminpage.php");
            exit();
        }
        if ($user == $username && $type == 'user' && $pass == $password) {
            header("location:index.php");
            exit();
        }
    }
}

?>