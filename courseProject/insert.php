<?php

include_once 'post-comment.php';
if(isset($_POST['submit']))
{    
    $comment = $_POST['comment'];

     $sql = "INSERT INTO reviews (comment)
     VALUES ('$comment')";
 
     if (mysqli_query($conn, $sql)) {
        header("location: pyrva-kniga.php");;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>