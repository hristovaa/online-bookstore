<?php include('loginfunc.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Вход</h2>
	</div>
	<form method="post" action="login.php">
		<div class="input-group">
			<label>Потребителско име</label>
			<input type="text" name="username" id="username">
		</div>
		<div class="input-group">
		<label>Тип потребител</label>
		<input type="user_type" name="user_type" >
		</div>
		<div class="input-group">
			<label>Парола</label>
			<input type="password" name="password" id="pass">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Вход</button>
		</div>
		<p>
			Нямате профил ? <a href="registration.php">Регистрация</a>
		</p>
	</form>
</body>
</html>