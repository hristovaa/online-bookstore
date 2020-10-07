<?php 
 
require_once 'post-comment.php';
 
if($_GET['title_id']) {
    $title_id = $_GET['title_id'];
 
    $sql = "SELECT * FROM admin WHERE title_id = {$title_id}";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
 
    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Премахнете книга</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
 
<h3>Наистина ли искате да я премахнете ?</h3>
<form action="remove.php" method="post">
 
    <input type="hidden" name="title_id" value="<?php echo $data['title_id'] ?>" />
    <button type="submit">Запазете промените</button>
    <a href="adminpage.php"><button type="button">Назад</button></a>
</form>
 
</body>
</html>
 
<?php
}
?>