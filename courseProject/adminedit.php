<?php 

require_once 'post-comment.php';
 
if($_GET['title_id']) {
    $id = $_GET['title_id'];
 
    $sql = "SELECT * FROM admin WHERE title_id = {$id}";
    $result = $conn->query($sql);
 
    $data = $result->fetch_assoc();
 
    $conn->close();
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Промяна</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
 
<fieldset>
    <legend>Промяна</legend>
 
    <form action="update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Заглавие</th>
                <td><input type="text" name="title" placeholder="First Name" value="<?php echo $data['title'] ?>" /></td>
            </tr>     
            <tr>
                <th>Автор</th>
                <td><input type="text" name="author" placeholder="Last Name" value="<?php echo $data['author'] ?>" /></td>
            </tr>
            <tr>
                <th>Цена</th>
                <td><input type="text" name="price" placeholder="Age" value="<?php echo $data['price'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['title_id']?>" />
                <td><button type="submit">Запазете промените</button></td>
                <td><a href="adminpage.php"><button type="button">Назад</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>