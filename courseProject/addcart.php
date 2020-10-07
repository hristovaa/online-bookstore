<?php
if($action=='addcart' && $_SERVER['REQUEST_METHOD']=='POST') {	
        //Finding the product by code
        $query = "SELECT * FROM products WHERE id=$id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam('id', $_POST['id']);
        $stmt->execute();
        $product = $stmt->fetch();
        
        $currentQty = $_SESSION['products'][$_POST['id']]['qty']+1; //Incrementing the product qty in cart
        $_SESSION['products'][$_POST['id']] =array('qty'=>$currentQty,'title'=>$product['title'],'price'=>$product['price']);
        $product='';
        header("Location:cart.php");
?>