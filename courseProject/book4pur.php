<?php

include_once 'post-comment.php';
if(isset($_POST['send']))
{    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $product = "Гробище за домашни любимци";

     $sql = "INSERT INTO orders (name, address, product)
     VALUES ( '$name', '$address', '$product')";
 
     if (mysqli_query($conn, $sql)) {
        header("location: chetvyrta-kniga.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>