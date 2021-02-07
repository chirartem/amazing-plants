<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "site";
$password = "Sql_760165";
$dbname = "amazing_plants";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8"); // Procedural approach
$conn->set_charset("utf8");        // Object-oriented approach

// Check connection
if ($conn->connect_error) {
	die("Connection failed now: " . $conn->connect_error);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>Интересные растения</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<!-- <div class="logotyp">
		<a href="index.html">
			<img src="images/logo.png" alt="" class="logo" />
			<br />
			<span>Amazing <sub>plants</sub></span>
		</a>
	</div> -->
	<div class="display-flex">
		<div class="menu">
			<h2 class="menu-h2">Растения:</h2>
			<ul>

				<?php
				$sql = "SELECT name from plants where visible=1 order by sort";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()) {
					echo "<li><a href=\"\">".$row["name"]."</a></li>";
				} 
				?>
			</ul>
			<h2 class="menu-h2">Деревья:</h2>
			<ul>

				<?php
				$sql = "SELECT name from trees where visible=1 order by sort";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()) {
					echo "<li><a href=\"\">".$row["name"]."</a></li>";
				} 
				?>

			</ul>
		</div>
		<div class="white_background_div">
			<div class="cont-container">
				<div class="content">
					<h1>Контакты:</h1>
					<div class="contact-list">
						<div class="contactspt"><div class="img-align"><a href="https://github.com/chirartem/amazing-plants"><img src="images/github.svg" alt="" class="contacts-img" /></a></div></div>
						<div class="contactspt"><div class="img-align"><a href="mailto:chirartem@gmail.com"><img src="images/gmail.svg" alt="" class="contacts-img" /></a></div></div>
						<div class="contactspt"><div class="img-align"><a href=""><img src="images/instagram.svg" alt="" class="contacts-img" /></a></div></div>
						<div class="contactspt"><div class="img-align"><a href=""><img src="images/telegram.svg" alt="" class="contacts-img" /></a></div></div>
					</div>
				</div>
			</div>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et dolor, odit nisi reiciendis harum illum voluptate, ut, ipsum iure quaerat, sit. Praesentium totam vero, ipsum in ullam voluptatibus cupiditate. Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Veritatis eligendi, quis, consectetur voluptatum quo corrupti porro velit excepturi. Nemo ad quidem dolorum tempora similique possimus nam modi eaque, placeat architecto!
			Sint tenetur itaque, vel, fugit, minus a dolore impedit repellendus illum cupiditate sunt eaque neque quod? Hic, omnis. Modi expedita, similique ea amet rem molestias vel nobis ipsa in totam?
			Amet saepe laborum perferendis hic, unde laudantium laboriosam vitae vel adipisci itaque eos tenetur expedita temporibus nulla perspiciatis impedit ex consectetur, rerum harum magnam quod? Molestiae aspernatur qui architecto at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, aperiam repellendus corrupti aspernatur, esse tempore itaque? Quod ipsum autem eius facilis, molestiae quae asperiores! Fuga doloremque, nisi aperiam animi provident?
			Perspiciatis sit odit exercitationem amet quidem voluptas sunt autem, nam fugit, labore reprehenderit! Mollitia provident libero culpa corporis soluta ullam harum. Nihil earum doloribus itaque ratione maiores aspernatur, laudantium commodi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus impedit quidem, esse laborum sit hic nesciunt, aperiam nulla, harum quos facere explicabo. Voluptas earum, sed minima enim similique sit, placeat!
			Eaque, sit doloremque similique sed dolores dolorum, expedita rem itaque! Dolores sint similique explicabo consequuntur, laboriosam ducimus sequi ipsum possimus corporis quas enim, accusamus voluptate impedit magni temporibus, deleniti. Dolorem.
			Id minus doloribus at numquam vero, expedita error hic amet enim illum ipsum ullam, sunt earum laboriosam nam iste. Autem numquam iure unde ullam omnis harum repellat hic quod cupiditate. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem minus consequuntur asperiores fuga aliquid, tempora neque non nobis sapiente maiores qui vitae aut earum dolore, laboriosam atque mollitia repellat cum?
			Nobis incidunt ut officia tempora omnis, voluptates eaque magnam labore vero esse quos doloremque ullam minima obcaecati, alias saepe excepturi fuga cumque tenetur cupiditate, rerum. Voluptates aspernatur vel ad autem.
			Quidem ullam ea error iste eum ipsam magni porro. Nisi ipsum, enim quos excepturi. Esse voluptatem veritatis perspiciatis libero nihil aut dignissimos odio accusamus animi nemo cumque laborum natus, iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil totam voluptatum dolore dolorum nisi? Ullam quo molestiae quisquam, illum, iste recusandae reiciendis blanditiis suscipit culpa sunt accusamus alias ut.
			Non neque velit, nisi unde. Blanditiis, assumenda ad dolores molestias accusantium ipsam, sunt, ipsa repellat inventore labore dolorem numquam, cupiditate ab unde quia saepe. Sint velit exercitationem asperiores dolorum quaerat.
			Excepturi commodi et hic minima corporis delectus, repellat optio ipsa consequuntur laudantium nisi, quos. Modi deserunt aspernatur sapiente nam odio sunt, ratione deleniti inventore. Consectetur corrupti, unde quam perferendis nam.
			Quam voluptatem dolorum accusamus adipisci sunt rerum ea ullam ipsam, enim mollitia, necessitatibus perferendis ipsa, fuga blanditiis obcaecati autem! Optio, sed amet magni maxime corrupti placeat iste in laudantium alias?</p>
		</div>
		<!----------------------------------------------------------------------------------------------------------------------------------------->
		<a href="#" class="back-to-top"><img src="images/up-the-page.svg" alt=""></a>
		<script src="script/script.js"></script>
	</div>
</body>
</html>