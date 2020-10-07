<?php
	include_once 'post-comment.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>"Поръчка"</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	</form>
		<div class="buy_form">
			<div class="manageMember">
    <table border="3" cellspacing="3" cellpadding="3">
        <thead>
            <tr>
                <th>Продукт</th>
                <th>Цена</th>
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
                        <td>".$row['product']."</td>
                    </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>
			<form action="book4pur.php" method="post">
			<input type="text" id="name" name="name" placeholder="Име" value="">
			<input type="text" id="address" name="address" placeholder="Адрес" value="">
			<br>

			<input type="submit" class="btn2" name="send" value="Изпрати" onclick="pop()">
		</div>
</body>
</html>