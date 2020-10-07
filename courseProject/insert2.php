<?php
include_once 'post-comment.php';

if(isset($_POST['submit2']))
{    
     $comment_2 = $_POST['comment_2'];

     $sql = "INSERT INTO reviews2book (comment)
     VALUES ('$comment_2')";
 
     if (mysqli_query($conn, $sql)) {
        header("location: vtora-kniga.php");;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>