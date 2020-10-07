<?php 
include('post-comment.php');
include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Регистрация</h2>
</div>
<form method="post" action="functions.php">
	<div class="input-group">
		<label>Потребителско име</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Парола</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Потвърдете паролата</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<label>Тип потребител</label>
		<input type="user_type" name="user_type" value="">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Регистрация</button>
	</div>
	<p>
		Имате регистрация ? <a href="login.php">Вход</a>
	</p>
</form>
</body>
</html>
