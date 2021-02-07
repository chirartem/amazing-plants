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
		<div class="menu">
			<h2 class="menu-h2">Растения:</h2>
			<ul class="menu-ul">

				<?php
				$sql = "SELECT name from plants where visible=1 order by sort";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()) {
					echo "<li><a href=\"\">".$row["name"]."</a></li>";
				} 
				?>
			</ul>
			<h2 class="menu-h2">Деревья:</h2>
			<ul class="menu-ul">

				<?php
				$sql = "SELECT name from trees where visible=1 order by sort";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()) {
					echo "<li><a href=\"\">".$row["name"]."</a></li>";
				} 
				?>

			</ul>
		</div>
		<div class="cont-container">
			<div class="c-content">
				<h1>Контакты:</h1>
				<div class="contact-list">
					<div class="contactspt"><div class="img-align"><a href="https://github.com/chirartem/amazing-plants"><img src="images/github.svg" alt="" class="contacts-img" /></a></div></div>
					<div class="contactspt"><div class="img-align"><a href="mailto:chirartem@gmail.com"><img src="images/gmail.svg" alt="" class="contacts-img" /></a></div></div>
					<div class="contactspt"><div class="img-align"><a href=""><img src="images/instagram.svg" alt="" class="contacts-img" /></a></div></div>
					<div class="contactspt"><div class="img-align"><a href=""><img src="images/telegram.svg" alt="" class="contacts-img" /></a></div></div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-container">
	<!----------------------------------------------------------------------------------------------------------------------------------------->
	<a href="#" class="back-to-top"><img src="images/solid.svg" alt=""></a>
	<script src="script/script.js"></script>
</body>
</html>