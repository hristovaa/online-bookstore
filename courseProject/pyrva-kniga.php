<?php
	include_once 'post-comment.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>"Железният светилник"</title>
	<link href="style2.css" rel="stylesheet">
	<script type="text/javascript" src="script.js"></script>
	
</head>
<body class="books">
<div class="cont">
	<input type="checkbox" id="c1">
	<input type="checkbox" id="c2">
	<input type="checkbox" id="c3">
	<div id="cover">
	<img src="images/762.jpg" alt="Снимка на корицата на книгата "Железният светилник">
	</div>

	<div class="page-cont">
		<div class="page" id="p1">
			<img src="images/book-page.jpg">
			<div class="back">
				<label class="but-back" for="c1">Назад</label>
				<label class="but-back" for="c1">Назад</label>
			</div>
			<div class="front">
				<h1>"Железният светилник"</h1>
				<h3>Кратко описание</h3>
				<p> Писателят изразява позицията си по въпроси, които съдбовно засягат него и хилядите му сънародници в Пиринска Македония, където по това време българи провеждат антибългарска политика. Това е причината да се обясни вдъхновението и вътрешната сила на тези романи, които са духовно оръжие в ръцете на автора. Да защити националната ни история от посегателства и фалшификация, е дълг на Димитър Талев чрез вдъхновеното му творчество.</p>

				<h3>Пълно описание</h3>
				<p>Романът “Железният светилник” поставя един основен проблем и това е отношението между развитието на рода и историята на народа. Той възкресява времето на Българското възраждане, когато народът ни израства духовно, когато българите се приобщават до европейските традиции. Стремежът към просвещение и борба, онова мъчително напредване в общия ход на историята, в което са вплетени човешки съдби, е основна тема на романа. Тази епична социална творба разкрива важни човешки проблеми, които в конфигурацията на времето получават своя колорит. Съдбите на героите в романа очертават пътя на общественото развитие. Героите се осъзнават като принадлежащи не само на определен род, но и на народ, на общност, която се развива, търси своята реализация чрез борба за просвещение, борба за самостоятелна българска църква, за национална и духовна свобода. Пазейки традициите на рода, Талевите герои опазват традициите на своя народ в неговата историческа борба. Героите интуитивно или съзнателно, чрез своите действия, “пишат” историята на народа си, водени от чувство за чест, достойнство и принадлежност.</p>
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
				$sql = "SELECT * FROM reviews;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo $row['comment']. "<br><br>";
					}
				}
			?>
	<p>
			Впечатляващо написана книга с изящен край. Разби сърцето ми, поплаках си накрая, но въпреки това я завърших с (тъжна) усмивка. Все пак животът продължава, независимо от всичко.
	</p>

		<p>
			Майсторският роман на Талев, превърнал се в класика, е истинско богатство сред българските исторически романи. Преплита началото на тежката борба за църковна еманципация от гръкоманите със семейната история на типично семейство от Вардарска Македония от района на Прилеп. Силно начало на поредицата в неподражаем стил!
	</p>

		<p>
			Прочетох я на един дъх! Образите живеят в едно съвсем различно време и все пак читателят ги чувства толкова близки. Наистина уникална книга, много смислена и разкриваща живота в пълния му спектър. Дълбоко ме впечатли! Героите, така жизнени и дейни, ще оставят завинаги ярък спомен в съзнанието ми.
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
			<h3 class="last">Форма за изпращане на ревю</h3>
							<div id="myDIV">
							<form action = "insert.php" method = "post">
						      <input type="text" id="myText" name="comment">
							  <input type="submit" class="btn" name="submit" value="Сподели" onclick="myFunction()">
						      </div>
			</form>
				<h3 class="last">Цена: 10лв.</h3>
				<h3 class="last">Форма за закупуване</h3>
				<div class="buy_form">
					<form action="book1pur.php" method="post">
				    <input type="text" id="name" name="name" placeholder="Име" value="">
				    <input type="text" id="address" name="address" placeholder="Адрес" value="">
				    <br>
				     <input type="submit" class="btn2" name="send" value="Изпрати" onclick="pop()">
				   	<!--<button onclick="pop()" class="btn2">Изпрати</button>-->
					</form>
				</div>

				<label class="but-next" for="c3">Следваща</label>
	
</body>
</html>
