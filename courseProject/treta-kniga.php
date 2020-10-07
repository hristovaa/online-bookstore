<?php
	include_once 'post-comment.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>"Крадецът на книги"</title>
	<link href="style2.css" rel="stylesheet">
	<script type="text/javascript" src="script.js"></script>
</head>
<body class="books">
<div class="cont">
	<input type="checkbox" id="c1">
	<input type="checkbox" id="c2">
	<input type="checkbox" id="c3">
	<div id="cover">
	<img src="images/150042_b.jpg" alt="Снимка на корицата на книгата "Крадецът на книги">
	</div>

	<div class="page-cont">
		<div class="page" id="p1">
			<img src="images/book-page.jpg">
			<div class="back">
				<label class="but-back" for="c1">Назад</label>
			</div>
			<div class="front">
				<h1>"Крадецът на книги"</h1>
			<h3>Кратко описание</h3>
			<p>Това е разказ за:<br>
		   - едно момиче;<br>
		   - известен брой думи;<br>
		   - един акордеонист;<br>
		   - няколко фанатични германци;<br>
		   - един еврейски юмручен боец;<br>
		   и много кражби.<br>
			Нещо много важно. Смъртта ще посети крадеца на книги три пъти.
			</p>

			<h3>Пълно описание</h3>
			<p>„Крадецът на книги“ е роман от 2005 г. на австралийския писател Маркъс Зюсак. Книгата става международен бестселър и е преведена на много езици. Филмовата адаптация със същото име излиза през 2013 г. Историята я разказва Смъртта. Тя започва със смъртта на малкия брат на Лизел, която след това пристига в къщата на новите си приемни родители, Ханс и Роза Хуберман. По време на живота си там, тя става свидетел на настъплението и ужасите на нацисткия режим, хваната между невинността на детството и зрелостта. Тъй като политическата ситуация в Германия се влошава, приемните ѝ родители приемат и укриват еврейски боксьор на име Макс. Ханс, който изгражда близка връзка с Лизел, тайно я учи да чете. Научавайки силата на писането и споделянето на писмено слово, Лизел продължава да краде книги, след като първата си книга открадва при погребението на брат си, без да може да чете. Открадва и книга от показното аутодафе, организирано в градчето от Хитлерюгенд. Продължава да краде и след като войната нахлува в живота на градчето и обръща живота на хората.</p>
			<label class="but-next" for="c1">Следваща</label>
		</div>
	</div>

	<div class="page" id="p2">
			<img src="images/book-page.jpg">
			<div class="back">
				<label class="but-back" for="c2">Назад</label>
			</div>
			<div class="front">
				<h3 class="h3-al">Потребителски ревюта</h3>
				<div id="myDIV">
				<?php
				$sql = "SELECT * FROM reviews3book;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo $row['comment']. "<br><br>";
					}
				}
			?>
		<p>
			Книгата е невероятна. Може би всеки от нас ще усети дълбокото значение на думите,появили се от устата на едно малко момиче. Ами добрият приятел Макс, заради когото тя успява да получи няколко удара? Дали всеки от нас има по един такъв зад себе си? Ами Руди, чиято черга на живота бе дръпната под спещите му крака?Дали той го заслужаваше? Радвам се, че "изгубих" моето време с тази книга.Вероятно няма да спра, да обмислям случките, доста дълго.
	</p>

	<p>
			Когато книга съумее да ме разплаче, знам, че наистина си струва. Това бе за мен ,,Крадецът на книги" в последните четиридесет страници, а и в немалко моменти преди това. Безспорен шедьовър, отварящ вратите към суровата действителност на отминало време, което не бива да допускаме да се повтаря. 
	</p>

	<p>
			"Прекрасна книга за живота, борбата и оцеляването, разказана през погледа на Смъртта. Действието се развива през Втората световна война, но освен драмата сполетяла евреите, книгата ни разказва и за драмата на уплашените немски деца. Главната героиня е едно малко момиченце Лизел, което се сблъсква непрекъснато със Смъртта, но намира утеха и смисъл в живота, чрез книгите.
	</p>
</div>
<label class="but-next" for="c2">Следваща</label>
		</div>
	</div>

	<div class="page" id="p3">
			<div class="back">
				<label class="but-back" for="c3">Назад</label>
			</div>
			<div class="front">
			<div class="front">
				<h3 class="last">Форма за изпращане на ревю</h3>
							<div id="myDIV">
							<form action = "insert3.php" method = "post">
						      <input type="text" id="myText" name="comment_3">
							  <input type="submit" class="btn btn-primary" name="submit3" value="Сподели" onclick="myFunction()">
						      </div>
			</form>
				<h3 class="last">Цена: 16.99лв.</h3>
				<h3 class="last">Форма за закупуване</h3>
				<div class="buy_form">
					<form action="book3pur.php" method="post">
				    <input type="text" id="name" name="name" placeholder="Име" value="">
				    <input type="text" id="address" name="address" placeholder="Адрес" value="">
				    <br>
				   	<input type="submit" class="btn2" name="send" value="Изпрати" onclick="pop()">
					</form>
				</div>
				<label class="but-next" for="c3">Следваща</label>
</body>
</html>