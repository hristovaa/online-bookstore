<?php 
 
require_once 'post-comment.php';
 
if($_POST) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
 
    $sql = "INSERT INTO admin (title, author, price) VALUES ('$title', '$author', '$price')";
    if($conn->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='create.php'><button type='button'>Назад</button></a>";
        echo "<a href='adminpage.php'><button type='button'>Начало</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
 
    $conn->close();
}
 
?>