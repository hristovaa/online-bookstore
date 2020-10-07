
<?php
	if(isset($_POST['submit'])){
		if(!empty($_SESSION['cart'])){
		foreach($_POST['quantity'] as $key => $val){
			if($val==0){
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}
		}
	}
?>

<h1>Вижте количката || <a href="index.php?page=product">Продукти</a></h1>
<form method="post" action="index.php?page=cart">
<table>
	<tr>
    	<th>Заглавие</th>
        <th>Количество</th>
        <th>Цена</th>
        <th>Общо</th>
	</tr>
    <?php
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($conn, $sql);
			$totalprice=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
				$totalprice += $subtotal;
	?>
	<tr>
		<td><?php echo $row['title']; ?></td>
        <td><input type="text" name="quantity[<?php echo $row['id']; ?>]" size="6" value="<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?>"> </td>
        <td><?php echo $row['price'] . "лв."; ?></td>
        <td><?php echo $_SESSION['cart'][$row['id']]['quantity']*$row['price']. "лв."; ?></td>       
	</tr>
            
    <?php
			}
			}else{
	?>
			<tr><td colspan="4"><?php echo "<i>Добавете в количката."; ?></td></tr>
    <?php
			}
	?>
    <tr>
    	<td colspan="3">Обща сума: <h1><?php echo "$totalprice". "лв."; ?></h1><td>
    </tr>
</table>
<br/><button type="submit" name="submit">Обновете количката</button>
</form>
<br/><p>За да премахнете продукт, напишете количество 0.</p>
