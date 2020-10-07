<?php
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($conn, $sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['price']);
		}else{
			$message="ID на продукта е невалидно";
		}
	}
}
?>
<h1>Продукти</h1>
<?php
if(isset($message)){
	echo "<h2>$message</h2>";	
}
?>
<table>
	<tr>
    	<th>Заглавие</th>
        <th>Автор</th>
        <th>Цена</th>
        <th>Опция</th>
	</tr>
    <?php
	$query = mysqli_query($conn,"SELECT * FROM products ORDER BY title ASC");
	if ($query) {
	while($row=mysqli_fetch_assoc($query)){
	?>
    <tr>
    	<td><?php echo $row['title']; ?></td>
        <td><?php echo $row['author']; ?></td>
        <td><?php echo $row['price'] . "лв."; ?></td>
        <td><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>">Добавете в количката</a></td>
    </tr>
    <?php
	}
}
	?>
</table>