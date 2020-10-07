<?php
require 'post-comment.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Количка</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="manageMember">
    <a href="books.php"><button type="button">Добавете книга</button></a>
    <table border="3" cellspacing="3" cellpadding="3">
        <thead>
            <tr>
                <th>Заглавие</th>
                <th>Цена</th>
                <th>Опции</th>
            </tr>
        </thead>
        <tbody>
             <?php
            $sql = "SELECT * FROM products";
            $result =mysqli_query($conn, $sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['title']."</td>
                        <td>".$row['price']."</td>
                        <td>
                            <a href='adminremove.php'><button type='button'>Премахнете</button></a>
                        </td>
                    </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>