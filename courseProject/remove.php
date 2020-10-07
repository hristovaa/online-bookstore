<?php 
require_once 'post-comment.php';
 
if($_POST) {
    $id = $_POST['title_id'];
 
    $sql = "DELETE FROM admin WHERE title_id = {$id}";
    if($conn->query($sql) === TRUE) {
       header("location: adminpage.php");
    } else {
        echo "Error updating record : " . $conn->error;
    }
 
    $conn->close();
}
?>