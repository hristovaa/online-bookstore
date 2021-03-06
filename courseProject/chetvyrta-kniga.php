<?php
	include_once 'post-comment.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>"Гробище за домашни любимци"</title>
	<link href="style2.css" rel="stylesheet">
	<script type="text/javascript" src="script.js"></script>
</head>
<body class="books">
<div class="cont">
	<input type="checkbox" id="c1">
	<input type="checkbox" id="c2">
	<input type="checkbox" id="c3">
	<div id="cover">
	<img src="images/217576_b.jpg" alt="Снимка на корицата на книгата "Гробище за домашни любимци">
	</div>

	<div class="page-cont">
		<div class="page" id="p1">
			<img src="images/book-page.jpg">
			<div class="back">
				<label class="but-back" for="c1">Назад</label>
			</div>
			<div class="front">
			<h1>"Гробище за домашни любимци"</h1>
			<h3>Кратко описание</h3>
			<p>„Гробище за домашни любимци”. В паметта ми се е заклещил споменът за четиричленно семейство с един котарак; семейство, което внушава доверие и идеал за съвместно живеене. Визията се пропуква след откриване на онова място зад къщата им: гробище за домашни любимци, където може да заровиш труп и след това той да се съживи.</p>

			<h3>Пълно описание</h3>
			<p>Гробище за домашни любимци е роман на ужасите на Стивън Кинг. През 1984 г. книгата е номинирана за Световната награда за фентъзи. По романа са създадени две филмови екранизации- една през 1989 г. (която се сдобива с продължение през 1992 г.) и втора, която излиза през 2019 г. В книгата се разказва за младо семейсто, местещо се от Чикаго в малкото градче Лъдлоу. Мъжът – лекар, млада и привлекателна съпруга, сладко малко момиченце и по-малкото 2-годишно братче. Всичко изглежда перфектно, дори гальовната котка на семейство Крийд. Но скоро след преместването и запознанството с възрастния им съсед Джъд, те откриват, че всичко далеч не е толкова перфектно, колкото на пръв поглед. В гората зад къщата им, недалеч в гробището за домашни любимци, се крие смразяваща кръвта сила. Много по-страшна от самата смърт и далеч по-опасна.</p>
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
				$sql = "SELECT * FROM reviews4book;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo $row['comment']. "<br><br>";
					}
				}
			?>
	<p>
			Какво мога да кажа за Гробище за домашни любимци? Все толкова великолепно-ужасна дори 15+ години по-късно. Абсолютно класически Кинг, който те кара да искаш да не докосваш собствената си котка и те принуждава от време на време да подушваш дали все още си мирише на същото.
	</p>

	<p>
		Истината е че не получих това,което очаквах,а получих много повече от това. Нито за момент не ми стана безинтересно,нито пък долових повтаране,което понякога усещам. През цялото време те държи под напрежение и има страшно много моменти,в които просто спираш да четеш и започваш усилено да мислиш и размишляваш върху това,което току що си прочел. Препоръчвам!
	</p>

	<p>
			Както казах и в началото ‘’Гробище за домашни любимци’’ е смразяващ кръвта роман, който те държи в напрежение до последната страница. Героите, историята, готините моменти, случките след една трагична нощ…Всичко това взето накуп прави книгата едно страхотно изживяне, което препоръчвам на всеки читател. Ще останете доволни. И може би малко изплашени.
	</p>
</div>
<label class="but-next" for="c2">Следваща</label>
		</div>
	</div>

	<div class="page" id="p3">
			<h3>End</h3>
			<div class="back">
				<label class="but-back" for="c3">Назад</label>
			</div> 
			<div class="front">
				<h3 class="last">Форма за изпращане на ревю</h3>
							<div id="myDIV">
							<form action = "insert4.php" method = "post">
						      <input type="text" id="myText" name="comment_4">
							  <input type="submit" class="btn btn-primary" name="submit4" value="Сподели" onclick="myFunction()">
						      </div>
			</form>
				<h3 class="last">Цена: 25лв.</h3>
				<h3 class="last">Форма за закупуване</h3>
				<div class="buy_form">
					<form action="book4pur.php" method="post">
				    <input type="text" id="name" name="name" placeholder="Име" value="">
				    <input type="text" id="address" name="address" placeholder="Адрес" value="">
				    <br>
				   	<input type="submit" class="btn2" name="send" value="Изпрати" onclick="pop()">
				</div>
				<label class="but-next" for="c3">Следваща</label>
</body>
</html>