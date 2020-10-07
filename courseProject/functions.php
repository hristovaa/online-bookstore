<?php 
include 'post-comment.php';

if(isset($_POST['register_btn']))
{    
    $username = $_POST['username'];
	$email = $_POST['email'];
	$user_type = $_POST['user_type'];
	$password = $_POST['password_1'];
	$password_2 = $_POST['password_2'];
	

    $sql = "INSERT INTO users (username, email, user_type, password)
     VALUES ('$username', '$email', '$user_type', '$password')";
 
    if (mysqli_query($conn, $sql)) {
        if ($user_type == 'admin') {
            header("location:adminpage.php");
            exit();
        }
        if ($user_type == 'user') {
            header("location:index.php");
            exit();
        }
}
}
?>