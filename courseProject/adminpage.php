<?php
require 'post-comment.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Админ</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="manageBooks">
     <a href="create.php"><button type="button">Добавете книга</button></a>
     <table border="3" cellspacing="3" cellpadding="3">
        <thead>
            <tr>
                <th>Продукт</th>
                <th>Автор</th>
                <th>Цена</th>
                <th>Опции</th>
            </tr>
        </thead>
        <tbody>
             <?php
            $sql = "SELECT * FROM admin";
            $result =mysqli_query($conn, $sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['title']."</td>
                        <td>".$row['author']."</td>
                        <td>".$row['price']."</td>
                        <td>
                            <a href='adminedit.php?title_id=".$row['title_id']."'><button type='button'>Промяна</button></a>
                            <a href='adminremove.php?title_id=".$row['title_id']."'><button type='button'>Премахване</button></a>
                        </td>
                    </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

<div class="orders">
   <table border="3" cellspacing="3" cellpadding="3">
        <thead>
            <tr>
                <th>Име</th>
                <th>Адрес</th>
                <th>Поръчка</th>
            </tr>
        </thead>
        <tbody>
             <?php
            $sql = "SELECT * FROM orders";
            $result =mysqli_query($conn, $sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['product']."</td>
                        
                    </tr>";
                }
            }
            ?>
             
        </tbody>
    </table>
</div>
</body>
</html>