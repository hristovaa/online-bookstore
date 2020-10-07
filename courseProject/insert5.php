<?php
include_once 'post-comment.php';

if(isset($_POST['submit5']))
{    
     $comment_5 = $_POST['comment_5'];

     $sql = "INSERT INTO reviews5book (comment)
     VALUES ('$comment_5')";
 
     if (mysqli_query($conn, $sql)) {
        header("location: peta-kniga.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>