<?php
require 'post-comment.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Потребител</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="manageMember">
        <table border="3" cellspacing="3" cellpadding="3">
        <thead>
            <tr>
                <th>Продукт</th>
                <th>Цена</th>
                <th>Опция</th>
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
                        <button type='button'>Добавете в количката</button>
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