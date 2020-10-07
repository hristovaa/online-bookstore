<?php
$servername='localhost';
    $username='root';
    $password='localhost17';
    $dbname = "online_shop";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
mysqli_set_charset($conn,'utf8');

?>
