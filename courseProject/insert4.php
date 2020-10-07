<?php
include_once 'post-comment.php';

if(isset($_POST['submit4']))
{    
     $comment_4 = $_POST['comment_4'];

     $sql = "INSERT INTO reviews4book (comment)
     VALUES ('$comment_4')";
 
     if (mysqli_query($conn, $sql)) {
        header("location: chetvyrta-kniga.php");;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>