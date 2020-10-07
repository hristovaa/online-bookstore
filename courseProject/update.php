<?php 
 
require_once 'post-comment.php';
 
if($_POST) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE admin SET title = '$title', author = '$author', price = '$price' WHERE title_id = {$id}";
    if($conn->query($sql) === TRUE) {
        echo "<p>Успешна промяна !</p>";
        echo "<a href='adminedit.php?title_id=".$id."'><button type='button'>Назад</button></a>";
        echo "<a href='adminpage.php'><button type='button'>Начало</button></a>";
    } else {
        echo "Грешка при промяна : ". $conn->error;
    }
 
    $conn->close();
 
}
 
?>