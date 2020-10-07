<?php
include_once 'post-comment.php';

if(isset($_POST['submit3']))
{    
     $comment_3 = $_POST['comment_3'];

     $sql = "INSERT INTO reviews3book (comment)
     VALUES ('$comment_3')";
 
     if (mysqli_query($conn, $sql)) {
        header("location: treta-kniga.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>